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
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### After Deployment - Set APP_URL:
Once your app is deployed, you'll get a URL like `https://pawfectpals.onrender.com`. Then add:
```
APP_URL=https://your-actual-app-name.onrender.com
```

### Gmail SMTP Configuration (for contact form):
```