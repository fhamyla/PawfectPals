# Railway Deployment Guide for PawfectPals

## 🚂 Deploying Laravel to Railway

Railway is a modern platform that makes it easy to deploy Laravel applications. It offers a generous free tier and excellent performance.

## Prerequisites
- ✅ Railway CLI installed: `npm install -g @railway/cli`
- ✅ Logged in to Railway: `railway login`
- ✅ Git repository initialized

## Step 1: Initialize Railway Project

```bash
# Initialize Railway project
railway init

# This will create a new project or link to an existing one
```

## Step 2: Set Environment Variables

Railway will automatically detect your Laravel application and set up the environment. You can add custom environment variables:

```bash
# Set Laravel environment variables
railway variables set APP_ENV=production
railway variables set APP_DEBUG=false
railway variables set APP_KEY=your-app-key
railway variables set APP_URL=https://your-app.railway.app

# Set database configuration (if using Railway Postgres)
railway variables set DB_CONNECTION=pgsql
railway variables set DB_HOST=${{Postgres.DATABASE_HOST}}
railway variables set DB_PORT=${{Postgres.DATABASE_PORT}}
railway variables set DB_DATABASE=${{Postgres.DATABASE_NAME}}
railway variables set DB_USERNAME=${{Postgres.DATABASE_USERNAME}}
railway variables set DB_PASSWORD=${{Postgres.DATABASE_PASSWORD}}

# Set cache and session drivers
railway variables set CACHE_DRIVER=file
railway variables set SESSION_DRIVER=file
railway variables set QUEUE_CONNECTION=sync
```

## Step 3: Add Database (Optional)

```bash
# Add PostgreSQL database
railway add

# Select "PostgreSQL" from the list
# Railway will automatically set the DATABASE_URL variable
```

## Step 4: Deploy Your Application

```bash
# Deploy to Railway
railway up

# This will build and deploy your application
```

## Step 5: Run Database Migrations

```bash
# Run migrations
railway run php artisan migrate

# If you have seeders
railway run php artisan db:seed
```

## Step 6: Set Up Storage and Cache

```bash
# Create storage link
railway run php artisan storage:link

# Clear and cache config
railway run php artisan config:cache
railway run php artisan route:cache
railway run php artisan view:cache
```

## Step 7: Open Your Application

```bash
# Open your app in browser
railway open
```

## Important Notes

### File Structure
Your project has the necessary files:
- ✅ `railway.json` - Railway configuration
- ✅ `Procfile` - Tells Railway how to run the app
- ✅ `public/.htaccess` - Apache URL rewriting
- ✅ `composer.json` - PHP dependencies
- ✅ `package.json` - Node.js dependencies

### Environment Variables
Railway automatically provides:
- `PORT` - The port your app should listen on
- `DATABASE_URL` - If you added a database
- `RAILWAY_STATIC_URL` - For static assets

### Database
- Railway provides PostgreSQL by default
- The `DATABASE_URL` is automatically set when you add a database
- Your app will automatically use the Railway database

### File Storage
- Railway has persistent storage
- File uploads will be preserved
- No need for external storage like AWS S3

### Custom Domains
```bash
# Add custom domain
railway domain add yourdomain.com
```

## Useful Commands

```bash
# View logs
railway logs

# Run artisan commands
railway run php artisan migrate

# Check status
railway status

# View variables
railway variables

# Restart app
railway restart
```

## Troubleshooting

### Common Issues:
1. **Build fails**: Check that all dependencies are in `composer.json`
2. **500 errors**: Check logs with `railway logs`
3. **Database connection**: Verify database credentials
4. **Asset compilation**: Ensure Node.js dependencies are installed

### Environment Variables
Make sure to set:
- `APP_KEY` (Laravel encryption key)
- `APP_URL` (Your Railway app URL)
- Database credentials (if using database)
- Mail configuration (if sending emails)

## Next Steps
1. Set up a custom domain
2. Configure SSL certificates (automatic with Railway)
3. Set up monitoring and logging
4. Configure automated deployments from GitHub
5. Set up staging environment

## Advantages of Railway
- ✅ No credit card required for free tier
- ✅ Better performance
- ✅ Automatic SSL certificates
- ✅ Persistent storage
- ✅ Easy database management
- ✅ Modern interface
- ✅ Generous free tier 