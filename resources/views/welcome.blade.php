<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pawfect Pals</title>
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <div class="logo">
                        <div class="logo-icon">
                            <img src="/android-chrome-192x192.svg" alt="Pawfect Pals Logo" width="30" height="30">
                        </div>
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
                        <img src="/catcopy.png" alt="Cute cat illustration" class="cat-image">
                        
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

        <!-- Featured Cats Section -->
        <section class="featured-cats" id="cats">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Meet Our Featured Felines</h2>
                    <p class="section-subtitle">Find your perfect purr-fect companion</p>
                </div>
                
                <div class="cats-grid">
                    <!-- Cat Card 1 -->
                    <div class="cat-card">
                        <div class="cat-image">
                            <img src="/luna.jpg" alt="Luna" class="cat-photo">
                            <div class="cat-overlay">
                                <button class="rent-btn">Rent Me</button>
                            </div>
                        </div>
                        <div class="cat-info">
                            <h3 class="cat-name">Luna</h3>
                            <div class="cat-tags">
                                <span class="tag">💤 Chill</span>
                                <span class="tag">🐾 Playful</span>
                                <span class="tag">❤️ Affectionate</span>
                            </div>
                            <p class="cat-description">A gentle soul who loves cuddles and sunny spots.</p>
                        </div>
                    </div>

                    <!-- Cat Card 2 -->
                    <div class="cat-card">
                        <div class="cat-image">
                            <img src="/whiskers.jpg" alt="Mr. Whiskers" class="cat-photo">
                            <div class="cat-overlay">
                                <button class="rent-btn">Rent Me</button>
                            </div>
                        </div>
                        <div class="cat-info">
                            <h3 class="cat-name">Mr. Whiskers</h3>
                            <div class="cat-tags">
                                <span class="tag">🎾 Energetic</span>
                                <span class="tag">🐾 Playful</span>
                                <span class="tag">🏃‍♂️ Active</span>
                            </div>
                            <p class="cat-description">Always ready for a game of chase and adventure!</p>
                        </div>
                    </div>

                    <!-- Cat Card 3 -->
                    <div class="cat-card">
                        <div class="cat-image">
                            <img src="/bella.jpg" alt="Bella" class="cat-photo">
                            <div class="cat-overlay">
                                <button class="rent-btn">Rent Me</button>
                            </div>
                        </div>
                        <div class="cat-info">
                            <h3 class="cat-name">Bella</h3>
                            <div class="cat-tags">
                                <span class="tag">💤 Chill</span>
                                <span class="tag">❤️ Affectionate</span>
                                <span class="tag">🎨 Artistic</span>
                            </div>
                            <p class="cat-description">A creative spirit who loves to watch you work.</p>
                        </div>
                    </div>

                    <!-- Cat Card 4 -->
                    <div class="cat-card">
                        <div class="cat-image">
                            <img src="/shadow.jpg" alt="Shadow" class="cat-photo">
                            <div class="cat-overlay">
                                <button class="rent-btn">Rent Me</button>
                            </div>
                        </div>
                        <div class="cat-info">
                            <h3 class="cat-name">Shadow</h3>
                            <div class="cat-tags">
                                <span class="tag">🔍 Curious</span>
                                <span class="tag">🐾 Playful</span>
                                <span class="tag">🌟 Mysterious</span>
                            </div>
                            <p class="cat-description">Mysterious and curious, always exploring new places.</p>
                        </div>
                    </div>

                    <!-- Cat Card 5 -->
                    <div class="cat-card">
                        <div class="cat-image">
                            <img src="/mittens.jpg" alt="Mittens" class="cat-photo">
                            <div class="cat-overlay">
                                <button class="rent-btn">Rent Me</button>
                            </div>
                        </div>
                        <div class="cat-info">
                            <h3 class="cat-name">Mittens</h3>
                            <div class="cat-tags">
                                <span class="tag">❤️ Affectionate</span>
                                <span class="tag">💤 Chill</span>
                                <span class="tag">🤗 Cuddly</span>
                            </div>
                            <p class="cat-description">The perfect lap cat for cozy evenings together.</p>
                        </div>
                    </div>

                    <!-- Cat Card 6 -->
                    <div class="cat-card">
                        <div class="cat-image">
                            <img src="/tiger.jpg" alt="Tiger" class="cat-photo">
                            <div class="cat-overlay">
                                <button class="rent-btn">Rent Me</button>
                            </div>
                        </div>
                        <div class="cat-info">
                            <h3 class="cat-name">Tiger</h3>
                            <div class="cat-tags">
                                <span class="tag">🎾 Energetic</span>
                                <span class="tag">🏃‍♂️ Active</span>
                                <span class="tag">🌟 Adventurous</span>
                            </div>
                            <p class="cat-description">Wild at heart, ready for outdoor adventures!</p>
                        </div>
                    </div>
                </div>

                <div class="view-all-container">
                    <a href="#cats" class="btn btn-primary">View All Cats</a>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="how-it-works" id="how-it-works">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">How It Works</h2>
                    <p class="section-subtitle">Getting your purr-fect companion is as easy as 1-2-3!</p>
                </div>
                
                <div class="steps-grid">
                    <!-- Step 1 -->
                    <div class="step-card">
                        <div class="step-icon">
                            <span>🐾</span>
                        </div>
                        <div class="step-number">1</div>
                        <h3 class="step-title">Pick your purrfect match</h3>
                        <p class="step-description">Browse our adorable cats and find the one that matches your personality and lifestyle.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-card">
                        <div class="step-icon">
                            <span>📅</span>
                        </div>
                        <div class="step-number">2</div>
                        <h3 class="step-title">Book for a day or weekend</h3>
                        <p class="step-description">Choose your preferred dates and duration. We offer flexible booking options to fit your schedule.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-card">
                        <div class="step-icon">
                            <span>❤️</span>
                        </div>
                        <div class="step-number">3</div>
                        <h3 class="step-title">Enjoy quality cat time!</h3>
                        <p class="step-description">Spend quality time with your chosen feline friend. Create memories and experience the joy of cat companionship.</p>
                    </div>
                </div>

                <div class="cta-container">
                    <a href="#cats" class="btn btn-primary">Start Browsing Cats</a>
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
