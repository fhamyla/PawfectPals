<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pawfect Pals - Your Purr-fect Cat Companion Awaits</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            :root {
                --soft-pink: #FFD1DC;
                --cream: #FFF8F2;
                --gray: #5F5F5F;
                --white: #FFFFFF;
                --accent-yellow: #FFE17D;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Open Sans', sans-serif;
                background-color: var(--cream);
                color: var(--gray);
                line-height: 1.6;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            /* Header */
            .header {
                background-color: var(--white);
                padding: 1rem 0;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            .nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 10px;
                font-family: 'Pacifico', cursive;
                font-size: 1.5rem;
                color: var(--soft-pink);
            }

            .logo-icon {
                width: 30px;
                height: 30px;
                background-color: var(--soft-pink);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
            }

            .nav-links {
                display: flex;
                gap: 2rem;
                list-style: none;
            }

            .nav-links a {
                text-decoration: none;
                color: var(--gray);
                font-weight: 600;
                transition: color 0.3s ease;
            }

            .nav-links a:hover {
                color: var(--soft-pink);
            }

            /* Hero Section */
            .hero {
                min-height: 100vh;
                display: flex;
                align-items: center;
                background: linear-gradient(135deg, var(--cream) 0%, var(--white) 100%);
                position: relative;
                overflow: hidden;
            }

            .hero::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="paw" patternUnits="userSpaceOnUse" width="50" height="50"><path d="M10,20 Q15,10 20,20 Q25,10 30,20 Q25,30 20,20 Q15,30 10,20 Z" fill="%23FFD1DC" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23paw)"/></svg>');
                opacity: 0.3;
            }

            .hero-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
                position: relative;
                z-index: 1;
            }

            .hero-text {
                max-width: 500px;
            }

            .hero-title {
                font-family: 'Poppins', sans-serif;
                font-size: 3.5rem;
                font-weight: 700;
                color: var(--gray);
                margin-bottom: 1rem;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 1.2rem;
                color: var(--gray);
                margin-bottom: 2rem;
                opacity: 0.8;
            }

            .hero-tagline {
                font-family: 'Pacifico', cursive;
                font-size: 1.1rem;
                color: var(--soft-pink);
                margin-bottom: 2rem;
            }

            .cta-buttons {
                display: flex;
                gap: 1rem;
                flex-wrap: wrap;
            }

            .btn {
                padding: 1rem 2rem;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                font-size: 1rem;
                transition: all 0.3s ease;
                display: inline-block;
                text-align: center;
                min-width: 150px;
            }

            .btn-primary {
                background-color: var(--soft-pink);
                color: var(--white);
                border: 2px solid var(--soft-pink);
            }

            .btn-primary:hover {
                background-color: transparent;
                color: var(--soft-pink);
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(255, 209, 220, 0.4);
            }

            .btn-secondary {
                background-color: transparent;
                color: var(--gray);
                border: 2px solid var(--gray);
            }

            .btn-secondary:hover {
                background-color: var(--gray);
                color: var(--white);
                transform: translateY(-2px);
            }

            .hero-image {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .cat-image {
                width: 100%;
                max-width: 400px;
                height: auto;
                border-radius: 20px;
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
                animation: float 6s ease-in-out infinite;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            .floating-elements {
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }

            .floating-element {
                position: absolute;
                opacity: 0.6;
                animation: float-slow 8s ease-in-out infinite;
            }

            .floating-element:nth-child(1) {
                top: 10%;
                left: 10%;
                animation-delay: 0s;
            }

            .floating-element:nth-child(2) {
                top: 20%;
                right: 15%;
                animation-delay: 2s;
            }

            .floating-element:nth-child(3) {
                bottom: 20%;
                left: 15%;
                animation-delay: 4s;
            }

            @keyframes float-slow {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-15px) rotate(5deg); }
            }

            /* Shadow Box Styles */
            .shadow-box {
                position: absolute;
                bottom: -20px;
                left: 50%;
                transform: translateX(-50%);
                background: var(--white);
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                padding: 1.5rem;
                max-width: 300px;
                width: 90%;
                border: 2px solid var(--soft-pink);
                animation: shadow-box-float 4s ease-in-out infinite;
            }

            .shadow-box-content {
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            .shadow-box-icon {
                font-size: 2rem;
                flex-shrink: 0;
            }

            .shadow-box-text h3 {
                font-family: 'Poppins', sans-serif;
                font-size: 1rem;
                font-weight: 600;
                color: var(--gray);
                margin: 0 0 0.5rem 0;
            }

            .shadow-box-text p {
                font-size: 0.9rem;
                color: var(--gray);
                opacity: 0.8;
                margin: 0;
                line-height: 1.4;
            }

            @keyframes shadow-box-float {
                0%, 100% { transform: translateX(-50%) translateY(0px); }
                50% { transform: translateX(-50%) translateY(-5px); }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .hero-content {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                    text-align: center;
                }

                .hero-title {
                    font-size: 2.5rem;
                }

                .nav-links {
                    display: none;
                }

                .cta-buttons {
                    justify-content: center;
                }

                .cat-image {
                    max-width: 300px;
                }

                .shadow-box {
                    position: relative;
                    bottom: 0;
                    left: 0;
                    transform: none;
                    margin-top: 1rem;
                    max-width: 100%;
                }
            }

            @media (max-width: 480px) {
                .hero-title {
                    font-size: 2rem;
                }

                .btn {
                    padding: 0.8rem 1.5rem;
                    font-size: 0.9rem;
                    min-width: 120px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <div class="logo">
                        <div class="logo-icon">🐾</div>
                        <span>Pawfect Pals</span>
                    </div>
                    <ul class="nav-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#cats">Browse Cats</a></li>
                        <li><a href="#how-it-works">How It Works</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="container">
                <div class="hero-content">
                    <!-- Left Column: Text Content -->
                    <div class="hero-text">
                        <h1 class="hero-title">Rent a Cat. Cuddle. Repeat.</h1>
                        <p class="hero-subtitle">Find your perfect feline companion for a day, weekend, or longer. Experience the joy of cat companionship without the long-term commitment.</p>
                        <p class="hero-tagline">"Your Purr-fect Cat Companion Awaits"</p>
                        <div class="cta-buttons">
                            <a href="#cats" class="btn btn-primary">Browse Cats</a>
                            <a href="#how-it-works" class="btn btn-secondary">How It Works</a>
                        </div>
                    </div>

                    <!-- Right Column: Cat Image -->
                    <div class="hero-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDQwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iNDAwIiByeD0iMjAiIGZpbGw9IiNGRkY4RjIiLz4KPGNpcmNsZSBjeD0iMTIwIiBjeT0iMTIwIiByPSI0MCIgZmlsbD0iI0ZGRDFEQyIvPgo8Y2lyY2xlIGN4PSIyODAiIGN5PSIxMjAiIHI9IjQwIiBmaWxsPSIjRkZEMURDIi8+CjxlbGxpcHNlIGN4PSIyMDAiIGN5PSIyMDAiIHJ4PSI4MCIgcnk9IjYwIiBmaWxsPSIjRkZEMURDIi8+CjxwYXRoIGQ9Ik0xNjAgMjgwIFEyMDAgMzIwIDI0MCAyODAiIHN0cm9rZT0iIzVGN0Y1RiIgc3Ryb2tlLXdpZHRoPSI0IiBmaWxsPSJub25lIi8+CjxwYXRoIGQ9Ik0yNDAgMjgwIFEyODAgMzIwIDMyMCAyODAiIHN0cm9rZT0iIzVGN0Y1RiIgc3Ryb2tlLXdpZHRoPSI0IiBmaWxsPSJub25lIi8+CjxjaXJjbGUgY3g9IjE4MCIgY3k9IjE2MCIgcj0iOCIgZmlsbD0iIzVGN0Y1RiIvPgo8Y2lyY2xlIGN4PSIyMjAiIGN5PSIxNjAiIHI9IjgiIGZpbGw9IiM1RjdGNUYiLz4KPHBhdGggZD0iTTE5MCAxODAgTDIxMCAxODAgTDIwMCAxOTAiIHN0cm9rZT0iIzVGN0Y1RiIgc3Ryb2tlLXdpZHRoPSIzIiBmaWxsPSJub25lIi8+CjxwYXRoIGQ9Ik0xNjAgMjQwIEwyNDAgMjQwIiBzdHJva2U9IiNGRkUxN0QiIHN0cm9rZS13aWR0aD0iMyIgZmlsbD0ibm9uZSIvPgo8L3N2Zz4K" alt="Cute cat illustration" class="cat-image">
                        
                        <!-- Floating Elements -->
                        <div class="floating-elements">
                            <div class="floating-element">🐾</div>
                            <div class="floating-element">❤️</div>
                            <div class="floating-element">😺</div>
                        </div>
                        
                        <!-- Shadow Box Below Cat Image -->
                        <div class="shadow-box">
                            <div class="shadow-box-content">
                                <div class="shadow-box-icon">🏠</div>
                                <div class="shadow-box-text">
                                    <h3>Safe & Loving Homes</h3>
                                    <p>All our cats are well-cared for and ready for cuddles!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript for smooth scrolling -->
        <script>
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add some interactive effects
            document.addEventListener('DOMContentLoaded', function() {
                // Add hover effect to buttons
                const buttons = document.querySelectorAll('.btn');
                buttons.forEach(button => {
                    button.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-2px)';
                    });
                    
                    button.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                    });
                });

                // Add scroll effect to hero title
                const heroTitle = document.querySelector('.hero-title');
                window.addEventListener('scroll', function() {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * -0.5;
                    if (heroTitle) {
                        heroTitle.style.transform = `translateY(${rate}px)`;
                    }
                });
            });
        </script>
    </body>
</html>
