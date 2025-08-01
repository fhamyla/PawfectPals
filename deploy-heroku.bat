@echo off
setlocal enabledelayedexpansion

echo 🚀 Starting Heroku deployment for PawfectPals...

REM Check if Heroku CLI is installed
heroku --version >nul 2>&1
if errorlevel 1 (
    echo ❌ Heroku CLI is not installed. Please install it first:
    echo https://devcenter.heroku.com/articles/heroku-cli
    pause
    exit /b 1
)

REM Check if user is logged in to Heroku
heroku auth:whoami >nul 2>&1
if errorlevel 1 (
    echo ❌ Please login to Heroku first:
    echo heroku login
    pause
    exit /b 1
)

REM Get app name from user
set /p APP_NAME="Enter your Heroku app name (or press Enter to create a new one): "

if "%APP_NAME%"=="" (
    echo Creating new Heroku app...
    for /f "tokens=*" %%i in ('heroku create --json ^| findstr "name"') do (
        set APP_NAME=%%i
    )
    set APP_NAME=!APP_NAME:"name":"=!
    set APP_NAME=!APP_NAME:"=!
    echo ✅ Created app: !APP_NAME!
) else (
    echo Using existing app: %APP_NAME%
)

REM Set buildpacks
echo 📦 Setting up buildpacks...
heroku buildpacks:set heroku/php -a %APP_NAME%
heroku buildpacks:add heroku/nodejs -a %APP_NAME%

REM Generate APP_KEY if not exists
for /f "tokens=*" %%i in ('php artisan key:generate --show 2^>nul') do set APP_KEY=%%i
if "%APP_KEY%"=="" (
    for /f "tokens=*" %%i in ('openssl rand -base64 32') do set APP_KEY=base64:%%i
)

REM Set environment variables
echo 🔧 Setting environment variables...
heroku config:set APP_ENV=production -a %APP_NAME%
heroku config:set APP_DEBUG=false -a %APP_NAME%
heroku config:set APP_KEY="%APP_KEY%" -a %APP_NAME%
heroku config:set APP_URL="https://%APP_NAME%.herokuapp.com" -a %APP_NAME%
heroku config:set CACHE_DRIVER=file -a %APP_NAME%
heroku config:set SESSION_DRIVER=file -a %APP_NAME%
heroku config:set QUEUE_CONNECTION=sync -a %APP_NAME%

REM Ask about database
set /p ADD_DB="Do you want to add a database? (y/n): "
if /i "%ADD_DB%"=="y" (
    echo 🗄️ Adding PostgreSQL database...
    heroku addons:create heroku-postgresql:mini -a %APP_NAME%
    
    REM Wait for database to be ready
    echo ⏳ Waiting for database to be ready...
    timeout /t 10 /nobreak >nul
    
    REM Set database environment variables
    for /f "tokens=*" %%i in ('heroku config:get DATABASE_URL -a %APP_NAME%') do set DATABASE_URL=%%i
    if not "%DATABASE_URL%"=="" (
        heroku config:set DB_CONNECTION=pgsql -a %APP_NAME%
        heroku config:set DB_URL="%DATABASE_URL%" -a %APP_NAME%
        echo ✅ Database configured
    )
)

REM Ask about mail configuration
set /p CONFIG_MAIL="Do you want to configure mail settings? (y/n): "
if /i "%CONFIG_MAIL%"=="y" (
    set /p SMTP_HOST="Enter SMTP host: "
    set /p SMTP_PORT="Enter SMTP port (default 587): "
    if "%SMTP_PORT%"=="" set SMTP_PORT=587
    set /p MAIL_USERNAME="Enter email username: "
    set /p MAIL_PASSWORD="Enter email password: "
    
    heroku config:set MAIL_MAILER=smtp -a %APP_NAME%
    heroku config:set MAIL_HOST="%SMTP_HOST%" -a %APP_NAME%
    heroku config:set MAIL_PORT="%SMTP_PORT%" -a %APP_NAME%
    heroku config:set MAIL_USERNAME="%MAIL_USERNAME%" -a %APP_NAME%
    heroku config:set MAIL_PASSWORD="%MAIL_PASSWORD%" -a %APP_NAME%
    heroku config:set MAIL_ENCRYPTION=tls -a %APP_NAME%
    heroku config:set MAIL_FROM_ADDRESS="%MAIL_USERNAME%" -a %APP_NAME%
    heroku config:set MAIL_FROM_NAME="PawfectPals" -a %APP_NAME%
    echo ✅ Mail configuration set
)

REM Deploy the application
echo 🚀 Deploying to Heroku...
git add .
git commit -m "Deploy to Heroku" 2>nul || git commit -m "Update for Heroku deployment"

REM Determine the current branch
for /f "tokens=*" %%i in ('git branch --show-current') do set CURRENT_BRANCH=%%i
if "%CURRENT_BRANCH%"=="main" (
    git push heroku main
) else if "%CURRENT_BRANCH%"=="master" (
    git push heroku master
) else (
    echo ⚠️ You're not on main or master branch. Pushing current branch...
    git push heroku %CURRENT_BRANCH%:main
)

REM Run post-deployment tasks
echo 🔧 Running post-deployment tasks...
heroku run php artisan migrate --force -a %APP_NAME%
heroku run php artisan config:cache -a %APP_NAME%
heroku run php artisan route:cache -a %APP_NAME%
heroku run php artisan view:cache -a %APP_NAME%

echo ✅ Deployment complete!
echo 🌐 Your app is available at: https://%APP_NAME%.herokuapp.com
echo 📊 View logs with: heroku logs --tail -a %APP_NAME%
echo 🔧 Run commands with: heroku run php artisan [command] -a %APP_NAME%

REM Open the app in browser
set /p OPEN_BROWSER="Do you want to open the app in your browser? (y/n): "
if /i "%OPEN_BROWSER%"=="y" (
    heroku open -a %APP_NAME%
)

pause 