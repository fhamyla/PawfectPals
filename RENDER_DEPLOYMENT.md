# Render Deployment Guide for PawfectPals

## 🚀 Deploying Laravel to Render

Render is an excellent platform for Laravel applications with a generous free tier and excellent performance.

## Prerequisites
- ✅ GitHub repository connected
- ✅ Laravel application ready
- ✅ Render account (free)

## Step 1: Create Render Account

1. **Go to**: https://render.com
2. **Sign up** with your GitHub account
3. **Verify your email** (if required)

## Step 2: Deploy from GitHub

1. **Click "New +"** in your Render dashboard
2. **Select "Web Service"**
3. **Connect your GitHub repository**
4. **Select the repository**: `fhamyla/PawfectPals`

## Step 3: Configure the Service

### Basic Settings:
- **Name**: `pawfectpals` (or your preferred name)
- **Environment**: `PHP`
- **Region**: Choose closest to your users
- **Branch**: `main`

### Build & Deploy Settings:
- **Build Command**: `composer install && npm install && npm run build`
- **Start Command**: `php artisan serve --host=0.0.0.0 --port=$PORT`

## Step 4: Set Environment Variables

In the Render dashboard, go to **Environment** tab and add:

### Required Variables:
```
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:56gSdzC0aSYbFIs6DxrbMlWPSJEmP8sJ3bZbf6LAZqc=
APP_URL=https://your-app-name.onrender.com
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### Gmail SMTP Configuration (for contact form):
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-16-character-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="PawfectPals"
```

### Generate APP_KEY:
```bash
php artisan key:generate --show
```

### Optional Database Variables (if using PostgreSQL):
```
DB_CONNECTION=pgsql
DB_HOST=your-db-host
DB_PORT=5432
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
```

## Step 5: Deploy

1. **Click "Create Web Service"**
2. **Wait for build** (usually 2-5 minutes)
3. **Check logs** if there are any issues

## Step 6: Post-Deployment Setup

Once deployed, run these commands in Render's shell:

```bash
# Run migrations (if using database)
php artisan migrate

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link
php artisan storage:link
```

## Important Notes

### File Structure
Your project has the necessary files:
- ✅ `render.yaml` - Render configuration
- ✅ `composer.json` - PHP dependencies
- ✅ `package.json` - Node.js dependencies
- ✅ `public/index.php` - Laravel entry point

### Environment Variables
Render automatically provides:
- `PORT` - The port your app should listen on
- `RENDER` - Set to `true` when running on Render

### Database
- Render provides PostgreSQL add-ons
- You can add a database from the Render dashboard
- Database credentials are automatically set as environment variables

### File Storage
- Render has persistent storage
- File uploads will be preserved
- No need for external storage like AWS S3

### Custom Domains
```bash
# Add custom domain in Render dashboard
# Go to your service → Settings → Custom Domains
```

## Useful Commands

### In Render Dashboard:
- **View logs**: Go to your service → Logs
- **Shell access**: Go to your service → Shell
- **Environment variables**: Go to your service → Environment

### In Render Shell:
```bash
# Run artisan commands
php artisan migrate
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check logs
tail -f storage/logs/laravel.log
```

## Troubleshooting

### Common Issues:
1. **Build fails**: Check that all dependencies are in `composer.json`
2. **500 errors**: Check logs in Render dashboard
3. **Database connection**: Verify database credentials
4. **Asset compilation**: Ensure Node.js dependencies are installed

### Environment Variables
Make sure to set:
- `APP_KEY` (Laravel encryption key)
- `APP_URL` (Your Render app URL)
- Database credentials (if using database)
- Mail configuration (if sending emails)

## Next Steps
1. Set up a custom domain
2. Configure SSL certificates (automatic with Render)
3. Set up monitoring and logging
4. Configure automated deployments from GitHub
5. Set up staging environment

## Advantages of Render
- ✅ No credit card required for free tier
- ✅ Excellent Laravel support
- ✅ Automatic SSL certificates
- ✅ Persistent storage
- ✅ Easy database management
- ✅ Modern interface
- ✅ Generous free tier
- ✅ Simple deployment process 