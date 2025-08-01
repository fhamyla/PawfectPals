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

html, body {
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    scroll-behavior: smooth;
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
    overflow-x: hidden;
    width: 100%;
    box-sizing: border-box;
}

/* Header */
.header {
    background-color: var(--white);
    padding: 1rem 0;
    position: relative;
    z-index: 10;
    border: none;
}

.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 100%;
    overflow: hidden;
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
    display: flex;
    align-items: center;
    justify-content: center;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: crisp-edges;
}

.logo-icon img {
    image-rendering: crisp-edges;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: pixelated;
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
    border: none;
    outline: none;
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
    width: 100%;
    max-width: 100vw;
    padding: 2rem 0;
    margin-top: 0;
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
    padding: 2rem 0;
    min-height: calc(100vh - 4rem);
}

.hero-text {
    max-width: 500px;
}

.hero-title {
    font-family: 'Poppins', sans-serif;
    font-size: 3.5rem;
    font-weight: 700;
    color: var(--gray);
    margin: 0 0 1rem 0;
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

.hero-image .cat-image {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: 20px;
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

/* Featured Cats Section */
.featured-cats {
    padding: 4rem 0;
    background-color: var(--white);
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--gray);
    margin-bottom: 1rem;
}

.section-subtitle {
    font-size: 1.1rem;
    color: var(--gray);
    opacity: 0.8;
}

.cats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.cat-card {
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.cat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    border-color: var(--accent-yellow);
}

.cat-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.cat-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.cat-card:hover .cat-photo {
    transform: scale(1.05);
}

.cat-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 225, 125, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.cat-card:hover .cat-overlay {
    opacity: 1;
}

.rent-btn {
    background: var(--white);
    color: var(--accent-yellow);
    border: 2px solid var(--white);
    padding: 0.8rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.rent-btn:hover {
    background: transparent;
    color: var(--white);
    transform: scale(1.05);
}

.cat-info {
    padding: 1.5rem;
}

.cat-name {
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--gray);
    margin-bottom: 1rem;
}

.cat-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.tag {
    background: var(--accent-yellow);
    color: var(--gray);
    padding: 0.3rem 0.8rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.cat-description {
    color: var(--gray);
    opacity: 0.8;
    line-height: 1.5;
    font-size: 0.9rem;
}

.view-all-container {
    text-align: center;
}

/* How It Works Section */
.how-it-works {
    padding: 4rem 0;
    background-color: var(--cream);
}

.steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.step-card {
    background: var(--white);
    border-radius: 20px;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    border: 2px solid transparent;
}

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    border-color: var(--accent-yellow);
}

.step-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80px;
    width: 80px;
    margin: 0 auto 1rem;
    background: var(--accent-yellow);
    border-radius: 50%;
    color: var(--gray);
}

.step-number {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--accent-yellow);
    color: var(--gray);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.1rem;
    font-family: 'Poppins', sans-serif;
}

.step-title {
    font-family: 'Poppins', sans-serif;
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--gray);
    margin-bottom: 1rem;
}

.step-description {
    color: var(--gray);
    opacity: 0.8;
    line-height: 1.6;
    font-size: 0.95rem;
}

.cta-container {
    text-align: center;
    margin-top: 2rem;
}

/* Testimonials Section */
.testimonials {
    padding: 4rem 0;
    background-color: var(--white);
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.testimonial-card {
    background: var(--cream);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 2px solid transparent;
    position: relative;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    border-color: var(--accent-yellow);
}

.testimonial-content {
    position: relative;
    margin-bottom: 1.5rem;
}

.quote-icon {
    font-size: 3rem;
    color: var(--accent-yellow);
    font-family: 'Pacifico', cursive;
    position: absolute;
    top: -15px;
    left: -15px;
    opacity: 0.6;
}

.testimonial-text {
    color: var(--gray);
    font-size: 1rem;
    line-height: 1.6;
    margin-top: 1.5rem;
    margin-left: 1rem;
    font-style: italic;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 1rem;
    border-top: 2px solid var(--accent-yellow);
    padding-top: 1rem;
}

.author-avatar {
    width: 50px;
    height: 50px;
    background: var(--accent-yellow);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.author-info {
    flex: 1;
}

.author-name {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--gray);
    margin: 0 0 0.2rem 0;
}

.author-title {
    font-size: 0.9rem;
    color: var(--gray);
    opacity: 0.7;
    margin: 0;
}

/* About Section */
.about {
    padding: 4rem 0;
    background-color: var(--cream);
    color: var(--gray);
    line-height: 1.6;
}

.about-content {
    max-width: 960px;
    margin: 0 auto;
    padding: 0;
}

.about-text {
    text-align: center;
}

.about-description {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 1.1rem;
    font-style: italic;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.about-description p {
    color: var(--gray);
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.about-features {
    display: flex;
    gap: 2rem;
    justify-content: center;
}

.feature-item {
    background-color: var(--white);
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    padding: 1.5rem;
    flex: 1;
    max-width: 280px;
    text-align: center;
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
}

.feature-icon {
    font-size: 2rem;
    margin-bottom: 0.8rem;
    display: block;
}

.feature-text h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--gray);
    margin: 0 0 0.8rem 0;
}

.feature-text p {
    color: var(--gray);
    font-size: 1rem;
    line-height: 1.5;
    opacity: 0.8;
    margin: 0;
}

/* Contact Section */
.contact {
    padding: 4rem 0;
    background-color: var(--cream);
}

.contact-content {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    margin-top: 3rem;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.contact-form {
    background-color: var(--white);
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    width: 100%;
    margin: 0 auto;
}

.contact-form h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--gray);
    margin: 0 0 2rem 0;
    text-align: center;
}

.contact-form-content {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 1rem 1.2rem;
    border: 2px solid #e5e5e5;
    border-radius: 12px;
    font-size: 1rem;
    font-family: 'Open Sans', sans-serif;
    background-color: var(--white);
    color: var(--gray);
    transition: all 0.3s ease;
    width: 100%;
    box-sizing: border-box;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--accent-yellow);
    box-shadow: 0 0 0 3px rgba(255, 225, 125, 0.1);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: var(--gray);
    opacity: 0.6;
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.contact-form .btn {
    margin-top: 1rem;
    width: 100%;
    padding: 1rem 2rem;
    font-size: 1.1rem;
}

/* Footer */
.footer {
    background-color: var(--gray);
    color: var(--white);
    padding: 1.5rem 0 0.5rem 0;
}

.footer-content {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 1rem;
}

.footer-logo {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.footer-logo .logo {
    color: var(--soft-pink);
}

.footer-tagline {
    font-family: 'Pacifico', cursive;
    font-size: 0.8rem;
    color: var(--soft-pink);
    margin: 0;
    opacity: 0.9;
}

.footer-links h4,
.footer-social h4,
.footer-contact h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 0.85rem;
    font-weight: 600;
    margin: 0 0 0.5rem 0;
    color: var(--white);
}

.contact-info-list {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
}

.contact-info-item {
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    color: var(--white);
    opacity: 0.8;
    font-size: 0.7rem;
    line-height: 1.4;
}

.contact-info-item .contact-icon {
    font-size: 0.8rem;
    flex-shrink: 0;
    margin-top: 0.1rem;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.3rem;
}

.footer-links a {
    color: var(--white);
    text-decoration: none;
    opacity: 0.8;
    transition: opacity 0.3s ease;
    font-size: 0.7rem;
}

.footer-links a:hover {
    opacity: 1;
    color: var(--soft-pink);
}

.social-icons {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
}

.social-icon {
    color: var(--white);
    text-decoration: none;
    opacity: 0.8;
    transition: opacity 0.3s ease;
    font-size: 0.7rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.social-icon:hover {
    opacity: 1;
    color: var(--soft-pink);
}

.footer-separator {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin: 2rem 0;
    padding: 1rem 0;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.paw-separator {
    font-size: 1.2rem;
    opacity: 0.6;
}

.footer-bottom {
    text-align: center;
    padding-top: 0.3rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-bottom p {
    color: var(--white);
    opacity: 0.7;
    margin: 0;
    font-size: 0.7rem;
}

/* Netlify form honeypot */
.hidden {
    display: none;
}

/* Success Message Styles */
.success-message {
    background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    animation: slideIn 0.5s ease-out;
}

.success-icon {
    font-size: 24px;
    flex-shrink: 0;
}

.success-text h4 {
    margin: 0 0 5px 0;
    font-size: 18px;
    font-weight: 600;
}

.success-text p {
    margin: 0;
    font-size: 14px;
    opacity: 0.9;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
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

    .hero-image .cat-image {
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

    .cats-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .cat-image {
        height: 200px;
    }

    .steps-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .step-card {
        padding: 1.5rem;
    }

    .step-icon {
        font-size: 2.5rem;
        height: 70px;
        width: 70px;
    }

    .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .testimonial-card {
        padding: 1.5rem;
    }

    .quote-icon {
        font-size: 2.5rem;
    }

    .about-content {
        text-align: center;
    }

    .about-text {
        max-width: 100%;
    }

    .about-features {
        flex-direction: column;
        gap: 1.5rem;
    }

    .feature-item {
        text-align: center;
        max-width: 100%;
    }

    .contact-content {
        gap: 2rem;
        margin-top: 2rem;
        padding: 0 1rem;
        max-width: 100%;
    }

    .contact-form {
        padding: 1.5rem;
        margin: 0;
        width: 100%;
        border-radius: 12px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        font-size: 16px; /* Prevents zoom on iOS */
    }

    .contact-item {
        padding: 1.5rem;
    }

    .footer-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
        padding: 0 1rem;
    }

    .footer-logo {
        display: none !important;
    }

    .contact-info-list {
        text-align: left;
    }

    .contact-info-item {
        justify-content: center;
    }

    .social-icons {
        flex-direction: row;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .footer-social {
        text-align: center;
        margin-top: 1rem;
    }

    .footer {
        padding: 2rem 0 1rem 0;
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

    .cats-grid {
        grid-template-columns: 1fr;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .contact-content {
        gap: 1.5rem;
        padding: 0 0.5rem;
        max-width: 100%;
    }

    .contact-form {
        padding: 1rem;
        margin: 0;
        width: 100%;
    }

    .contact-item {
        padding: 1rem;
    }

    .footer-content {
        gap: 1.5rem;
        padding: 0 0.5rem;
    }

    .footer {
        padding: 1.5rem 0 1rem 0;
    }

    .footer-logo {
        display: none !important;
    }

    .footer-social {
        text-align: center;
        margin-top: 0;
    }

    .footer-social h4 {
        margin-bottom: 0.5rem;
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
                        
                        @if(session('success'))
                            <script>
                                alert("{{ session('success') }}");
                            </script>
                        @endif
                        
                        <form class="contact-form-content" method="POST" action="/contact">
                            @csrf
                            <input type="hidden" name="form-name" value="contact" />
                            <p class="hidden">
                                <label>Don't fill this out if you're human: <input name="bot-field" /></label>
                            </p>
                            
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
                            <a href="https://www.linkedin.com/in/fhamyla/" class="social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="16" height="16" fill="currentColor">
                                    <path d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z"/>
                                </svg>
                                LinkedIn
                            </a>
                            <a href="https://github.com/fhamyla" class="social-icon">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor">
                                    <title>GitHub</title>
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                                </svg>
                                GitHub
                            </a>
                            <a href="https://fhamyla.netlify.app/" class="social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="16" height="16" fill="currentColor">
                                    <path d="M415.9 344L225 344C227.9 408.5 242.2 467.9 262.5 511.4C273.9 535.9 286.2 553.2 297.6 563.8C308.8 574.3 316.5 576 320.5 576C324.5 576 332.2 574.3 343.4 563.8C354.8 553.2 367.1 535.8 378.5 511.4C398.8 467.9 413.1 408.5 416 344zM224.9 296L415.8 296C413 231.5 398.7 172.1 378.4 128.6C367 104.2 354.7 86.8 343.3 76.2C332.1 65.7 324.4 64 320.4 64C316.4 64 308.7 65.7 297.5 76.2C286.1 86.8 273.8 104.2 262.4 128.6C242.1 172.1 227.8 231.5 224.9 296zM176.9 296C180.4 210.4 202.5 130.9 234.8 78.7C142.7 111.3 74.9 195.2 65.5 296L176.9 296zM65.5 344C74.9 444.8 142.7 528.7 234.8 561.3C202.5 509.1 180.4 429.6 176.9 344L65.5 344zM463.9 344C460.4 429.6 438.3 509.1 406 561.3C498.1 528.6 565.9 444.8 575.3 344L463.9 344zM575.3 296C565.9 195.2 498.1 111.3 406 78.7C438.3 130.9 460.4 210.4 463.9 296L575.3 296z"/>
                                </svg>
                                Portfolio
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <p>&copy; 2025 fhamyla. All rights reserved.</p>
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

            // Handle contact form submission
            const contactForm = document.querySelector('.contact-form-content');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    // Let the form submit normally to Laravel
                    // Laravel will handle the email sending
                });
            }
        });
    </script>
    </body>
</html>
