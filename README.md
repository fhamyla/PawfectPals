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

## Contact Form Setup with Netlify

The contact form is configured to work with Netlify and send emails to your Gmail account.

### Prerequisites

1. **Gmail App Password Setup**
   - Go to your Google Account settings
   - Enable 2-Factor Authentication
   - Generate an App Password for "Mail"
   - Save the 16-character app password

2. **Netlify Deployment**
   - Deploy your site to Netlify
   - Connect your GitHub repository

### Configuration

1. **For Local Development**
   - Create a `.env` file in the root directory
   - Add your Gmail credentials:
     ```
     GMAIL_USER=your-email@gmail.com
     GMAIL_APP_PASSWORD=your-16-character-app-password
     ```
   - Never commit this file to Git (it's already in .gitignore)

2. **For Netlify Deployment**
   - Go to your Netlify dashboard
   - Navigate to Site settings > Environment variables
   - Add the following variables:
     - `GMAIL_USER`: Your Gmail address (e.g., `your-email@gmail.com`)
     - `GMAIL_APP_PASSWORD`: Your Gmail app password

3. **Deploy**
   - Push your changes to GitHub
   - Netlify will automatically rebuild and deploy

### How It Works

- The contact form submits to Netlify's form handling
- A Netlify function processes the submission
- The function sends an email to your Gmail account
- Spam protection is included via honeypot field
- Form submissions are also stored in Netlify's dashboard

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.
