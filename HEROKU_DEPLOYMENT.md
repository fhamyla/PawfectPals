# Heroku Deployment Guide for PawfectPals

## Prerequisites
1. Install Heroku CLI: https://devcenter.heroku.com/articles/heroku-cli
2. Have a Heroku account
3. Git repository initialized

## Step 1: Install Heroku CLI and Login
```bash
# Install Heroku CLI (if not already installed)
# Download from: https://devcenter.heroku.com/articles/heroku-cli

# Login to Heroku
heroku login
```

## Step 2: Create Heroku App
```bash
# Create a new Heroku app
heroku create your-app-name

# Or if you want Heroku to generate a random name
heroku create
```

## Step 3: Add Buildpacks
```bash
# Add PHP buildpack
heroku buildpacks:set heroku/php

# Add Node.js buildpack for asset compilation
heroku buildpacks:add heroku/nodejs
```

## Step 4: Set Environment Variables
```bash
# Set Laravel environment variables
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set APP_URL=https://your-app-name.herokuapp.com

# Set database configuration (if using Heroku Postgres)
heroku config:set DB_CONNECTION=pgsql
heroku config:set DB_HOST=$(heroku config:get DATABASE_URL | cut -d: -f3 | cut -d@ -f2)
heroku config:set DB_PORT=5432
heroku config:set DB_DATABASE=$(heroku config:get DATABASE_URL | cut -d/ -f4)
heroku config:set DB_USERNAME=$(heroku config:get DATABASE_URL | cut -d: -f2 | cut -d@ -f1)
heroku config:set DB_PASSWORD=$(heroku config:get DATABASE_URL | cut -d: -f2 | cut -d@ -f2 | cut -d: -f1)

# Set cache and session drivers
heroku config:set CACHE_DRIVER=file
heroku config:set SESSION_DRIVER=file
heroku config:set QUEUE_CONNECTION=sync

# Set mail configuration (if using external mail service)
heroku config:set MAIL_MAILER=smtp
heroku config:set MAIL_HOST=your-smtp-host
heroku config:set MAIL_PORT=587
heroku config:set MAIL_USERNAME=your-email
heroku config:set MAIL_PASSWORD=your-password
heroku config:set MAIL_ENCRYPTION=tls
heroku config:set MAIL_FROM_ADDRESS=your-email
heroku config:set MAIL_FROM_NAME="PawfectPals"
```

## Step 5: Add Database (Optional)
```bash
# Add Heroku Postgres addon
heroku addons:create heroku-postgresql:mini

# Or for MySQL
heroku addons:create jawsdb:kitefin
```

## Step 6: Deploy Your Application
```bash
# Add all files to git
git add .

# Commit changes
git commit -m "Deploy to Heroku"

# Push to Heroku
git push heroku main

# Or if you're on master branch
git push heroku master
```

## Step 7: Run Database Migrations
```bash
# Run migrations
heroku run php artisan migrate

# If you have seeders
heroku run php artisan db:seed
```

## Step 8: Set Up Storage
```bash
# Create storage link
heroku run php artisan storage:link

# Clear and cache config
heroku run php artisan config:cache
heroku run php artisan route:cache
heroku run php artisan view:cache
```

## Step 9: Verify Deployment
```bash
# Open your app in browser
heroku open

# Check logs if needed
heroku logs --tail
```

## Important Notes

### File Structure
Your project already has the necessary files:
- ✅ `Procfile` - Tells Heroku how to run the app
- ✅ `public/.htaccess` - Apache URL rewriting
- ✅ `composer.json` - PHP dependencies
- ✅ `package.json` - Node.js dependencies

### Environment Variables
Make sure to set all required environment variables in Heroku:
- `APP_KEY` (Laravel encryption key)
- `APP_URL` (Your Heroku app URL)
- Database credentials
- Mail configuration
- Any other custom environment variables

### Database
- Heroku provides PostgreSQL by default
- Update your `.env` file locally to use `pgsql` instead of `mysql` if needed
- Or use a MySQL addon like JawsDB

### File Storage
- Heroku has an ephemeral filesystem
- For file uploads, consider using AWS S3 or similar cloud storage
- Update your `config/filesystems.php` accordingly

### Custom Domains
```bash
# Add custom domain
heroku domains:add www.yourdomain.com
```

## Troubleshooting

### Common Issues:
1. **Build fails**: Check that all dependencies are in `composer.json`
2. **500 errors**: Check logs with `heroku logs --tail`
3. **Database connection**: Verify database credentials
4. **Asset compilation**: Ensure Node.js buildpack is added

### Useful Commands:
```bash
# View logs
heroku logs --tail

# Run artisan commands
heroku run php artisan migrate

# Access Heroku bash
heroku run bash

# Check config vars
heroku config

# Restart app
heroku restart
```

## Next Steps
1. Set up a custom domain
2. Configure SSL certificates
3. Set up monitoring and logging
4. Configure automated deployments from GitHub
5. Set up staging environment 