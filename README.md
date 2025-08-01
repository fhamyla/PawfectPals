# PawfectPals

Welcome to PawfectPals! This is a Laravel-based project.

## Getting Started

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd PawfectPals
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies (for Vite)**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   ```
   Edit `.env` file and configure your database settings if needed

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Build assets (optional - for production)**
   ```bash
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```
   
   The application will be available at `http://localhost:8000`

8. **For development with hot reload (optional)**
   ```bash
   npm run dev
   ```
   This will watch for changes in your assets and automatically rebuild them

## Deployment

This project is configured for deployment on Render. See [RENDER_DEPLOYMENT.md](RENDER_DEPLOYMENT.md) for detailed deployment instructions.

### Quick Render Deployment

1. **Go to**: https://render.com
2. **Sign up** with your GitHub account
3. **Click "New +"** → **Web Service**
4. **Connect your repository**: `fhamyla/PawfectPals`
5. **Configure**:
   - **Build Command**: `composer install && npm install && npm run build`
   - **Start Command**: `php artisan serve --host=0.0.0.0 --port=$PORT`
6. **Set environment variables** (see deployment guide)
7. **Deploy!**

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.
