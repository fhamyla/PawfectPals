#!/bin/bash

# Heroku Deployment Script for PawfectPals
# Make sure you have Heroku CLI installed and are logged in

echo "🚀 Starting Heroku deployment for PawfectPals..."

# Check if Heroku CLI is installed
if ! command -v heroku &> /dev/null; then
    echo "❌ Heroku CLI is not installed. Please install it first:"
    echo "https://devcenter.heroku.com/articles/heroku-cli"
    exit 1
fi

# Check if user is logged in to Heroku
if ! heroku auth:whoami &> /dev/null; then
    echo "❌ Please login to Heroku first:"
    echo "heroku login"
    exit 1
fi

# Get app name from user
read -p "Enter your Heroku app name (or press Enter to create a new one): " APP_NAME

if [ -z "$APP_NAME" ]; then
    echo "Creating new Heroku app..."
    APP_NAME=$(heroku create --json | grep -o '"name":"[^"]*"' | cut -d'"' -f4)
    echo "✅ Created app: $APP_NAME"
else
    echo "Using existing app: $APP_NAME"
fi

# Set buildpacks
echo "📦 Setting up buildpacks..."
heroku buildpacks:set heroku/php -a $APP_NAME
heroku buildpacks:add heroku/nodejs -a $APP_NAME

# Generate APP_KEY if not exists
APP_KEY=$(php artisan key:generate --show 2>/dev/null || echo "base64:$(openssl rand -base64 32)")

# Set environment variables
echo "🔧 Setting environment variables..."
heroku config:set APP_ENV=production -a $APP_NAME
heroku config:set APP_DEBUG=false -a $APP_NAME
heroku config:set APP_KEY="$APP_KEY" -a $APP_NAME
heroku config:set APP_URL="https://$APP_NAME.herokuapp.com" -a $APP_NAME
heroku config:set CACHE_DRIVER=file -a $APP_NAME
heroku config:set SESSION_DRIVER=file -a $APP_NAME
heroku config:set QUEUE_CONNECTION=sync -a $APP_NAME

# Ask about database
read -p "Do you want to add a database? (y/n): " ADD_DB
if [[ $ADD_DB =~ ^[Yy]$ ]]; then
    echo "🗄️ Adding PostgreSQL database..."
    heroku addons:create heroku-postgresql:mini -a $APP_NAME
    
    # Wait for database to be ready
    echo "⏳ Waiting for database to be ready..."
    sleep 10
    
    # Set database environment variables
    DATABASE_URL=$(heroku config:get DATABASE_URL -a $APP_NAME)
    if [ ! -z "$DATABASE_URL" ]; then
        heroku config:set DB_CONNECTION=pgsql -a $APP_NAME
        heroku config:set DB_URL="$DATABASE_URL" -a $APP_NAME
        echo "✅ Database configured"
    fi
fi

# Ask about mail configuration
read -p "Do you want to configure mail settings? (y/n): " CONFIG_MAIL
if [[ $CONFIG_MAIL =~ ^[Yy]$ ]]; then
    read -p "Enter SMTP host: " SMTP_HOST
    read -p "Enter SMTP port (default 587): " SMTP_PORT
    SMTP_PORT=${SMTP_PORT:-587}
    read -p "Enter email username: " MAIL_USERNAME
    read -s -p "Enter email password: " MAIL_PASSWORD
    echo
    
    heroku config:set MAIL_MAILER=smtp -a $APP_NAME
    heroku config:set MAIL_HOST="$SMTP_HOST" -a $APP_NAME
    heroku config:set MAIL_PORT="$SMTP_PORT" -a $APP_NAME
    heroku config:set MAIL_USERNAME="$MAIL_USERNAME" -a $APP_NAME
    heroku config:set MAIL_PASSWORD="$MAIL_PASSWORD" -a $APP_NAME
    heroku config:set MAIL_ENCRYPTION=tls -a $APP_NAME
    heroku config:set MAIL_FROM_ADDRESS="$MAIL_USERNAME" -a $APP_NAME
    heroku config:set MAIL_FROM_NAME="PawfectPals" -a $APP_NAME
    echo "✅ Mail configuration set"
fi

# Deploy the application
echo "🚀 Deploying to Heroku..."
git add .
git commit -m "Deploy to Heroku" || git commit -m "Update for Heroku deployment"

# Determine the current branch
CURRENT_BRANCH=$(git branch --show-current)
if [ "$CURRENT_BRANCH" = "main" ]; then
    git push heroku main
elif [ "$CURRENT_BRANCH" = "master" ]; then
    git push heroku master
else
    echo "⚠️  You're not on main or master branch. Pushing current branch..."
    git push heroku $CURRENT_BRANCH:main
fi

# Run post-deployment tasks
echo "🔧 Running post-deployment tasks..."
heroku run php artisan migrate --force -a $APP_NAME
heroku run php artisan config:cache -a $APP_NAME
heroku run php artisan route:cache -a $APP_NAME
heroku run php artisan view:cache -a $APP_NAME

echo "✅ Deployment complete!"
echo "🌐 Your app is available at: https://$APP_NAME.herokuapp.com"
echo "📊 View logs with: heroku logs --tail -a $APP_NAME"
echo "🔧 Run commands with: heroku run php artisan [command] -a $APP_NAME"

# Open the app in browser
read -p "Do you want to open the app in your browser? (y/n): " OPEN_BROWSER
if [[ $OPEN_BROWSER =~ ^[Yy]$ ]]; then
    heroku open -a $APP_NAME
fi 