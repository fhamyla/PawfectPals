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

        <!-- Testimonials Section -->
        <section class="testimonials" id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">What Our Happy Renters Say</h2>
                    <p class="section-subtitle">Real stories from real cat lovers</p>
                </div>
                
                <div class="testimonials-grid">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p class="testimonial-text">Luna made my week! She's the perfect companion for my quiet evenings. I can't wait to rent her again!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>👩‍💼</span>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Sarah Johnson</h4>
                                <p class="author-title">Cat Enthusiast</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p class="testimonial-text">Mr. Whiskers is absolutely adorable! He kept me entertained all weekend with his playful antics.</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>👨‍💻</span>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Mike Chen</h4>
                                <p class="author-title">Weekend Warrior</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p class="testimonial-text">Bella is the sweetest cat I've ever met. She sat with me while I worked and made my home feel complete.</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>👩‍🎨</span>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Emma Rodriguez</h4>
                                <p class="author-title">Creative Professional</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p class="testimonial-text">Shadow's mysterious personality was exactly what I needed. Such a unique and curious companion!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>👨‍🔬</span>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">David Kim</h4>
                                <p class="author-title">Adventure Seeker</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p class="testimonial-text">Mittens is the perfect lap cat! She helped me relax after a stressful week. Pure therapy!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>👩‍⚕️</span>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Dr. Lisa Thompson</h4>
                                <p class="author-title">Healthcare Professional</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 6 -->
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p class="testimonial-text">Tiger's energy is contagious! We went on so many adventures together. Best weekend ever!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>🏃‍♂️</span>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Alex Martinez</h4>
                                <p class="author-title">Fitness Enthusiast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <div class="section-header">
                            <h2 class="section-title">About Pawfect Pals</h2>
                            <p class="section-subtitle">Connecting hearts, one purr at a time</p>
                        </div>
                        
                        <div class="about-description">
                            <p>Pawfect Pals connects loving cats with people looking for companionship. Whether you're lonely, curious, or just a cat lover, we've got a furry friend for you.</p>
                            
                            <p>Our mission is simple: to bring joy, comfort, and companionship to people's lives through the magic of cat companionship. We believe everyone deserves to experience the unconditional love and calming presence that cats provide.</p>
                            
                            <div class="about-features">
                                <div class="feature-item">
                                    <div class="feature-icon">🏠</div>
                                    <div class="feature-text">
                                        <h4>Safe & Loving Homes</h4>
                                        <p>All our cats come from caring environments and are well-socialized.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">❤️</div>
                                    <div class="feature-text">
                                        <h4>Flexible Companionship</h4>
                                        <p>Choose from daily visits to weekend stays - whatever fits your lifestyle.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">🐾</div>
                                    <div class="feature-text">
                                        <h4>Purr-fect Matches</h4>
                                        <p>We help you find the cat that matches your personality and schedule.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Get in Touch</h2>
                    <p class="section-subtitle">Ready to meet your purr-fect companion?</p>
                </div>
                
                <div class="contact-content">
                    <div class="contact-form">
                        <h3>Send us a Message</h3>
                        <form class="contact-form-content">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            
                            <div class="form-group">
                                <select id="subject" name="subject" required>
                                    <option value="">Select a Topic</option>
                                    <option value="booking">Book a Cat</option>
                                    <option value="questions">General Questions</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="partnership">Partnership</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <div class="logo">
                            <div class="logo-icon">
                                <img src="/android-chrome-192x192.svg" alt="Pawfect Pals Logo" width="30" height="30">
                            </div>
                            <span>Pawfect Pals</span>
                        </div>
                        <p class="footer-tagline">Your Purr-fect Cat Companion Awaits</p>
                    </div>
                    
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#cats">Browse Cats</a></li>
                            <li><a href="#how-it-works">How It Works</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#faqs">FAQs</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-contact">
                        <h4>Contact Info</h4>
                        <div class="contact-info-list">
                            <div class="contact-info-item">
                                <span class="contact-icon">📧</span>
                                <span>hello@pawfectpals.com</span>
                            </div>
                            <div class="contact-info-item">
                                <span class="contact-icon">📱</span>
                                <span>+1 (555) 123-4567</span>
                            </div>
                            <div class="contact-info-item">
                                <span class="contact-icon">📍</span>
                                <span>123 Cat Street, Purr City, PC 12345</span>
                            </div>
                            <div class="contact-info-item">
                                <span class="contact-icon">🕒</span>
                                <span>Mon-Fri: 9AM-6PM<br>Sat-Sun: 10AM-4PM</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="footer-social">
                        <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="#" class="social-icon">📷 Instagram</a>
                            <a href="#" class="social-icon">🎵 TikTok</a>
                            <a href="#" class="social-icon">📘 Facebook</a>
                        </div>
                    </div>
                </div>
                
                <div class="footer-separator">
                    <span class="paw-separator">🐾</span>
                    <span class="paw-separator">🐾</span>
                    <span class="paw-separator">🐾</span>
                </div>
                
                <div class="footer-bottom">
                    <p>&copy; 2025 Pawfect Pals. All rights reserved.</p>
                </div>
            </div>
        </footer>

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
