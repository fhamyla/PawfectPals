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

This project is configured for deployment on Railway. See [RAILWAY_DEPLOYMENT.md](RAILWAY_DEPLOYMENT.md) for detailed deployment instructions.

### Quick Railway Deployment

1. **Install Railway CLI**
   ```bash
   npm install -g @railway/cli
   ```

2. **Login to Railway**
   ```bash
   railway login
   ```

3. **Deploy**
   ```bash
   railway init
   railway up
   ```

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.
