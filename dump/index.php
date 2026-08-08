<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Design Portfolio</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Interactive Loading Screen -->
    <div id="loader">
        <div class="loader-content">
            <div class="spinner"></div>
            <div class="loader-text">Loading Portfolio...</div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <header>
        <a href="#" class="logo">STUDIO<span>.</span></a>
        <nav>
            <ul>
                <li><a href="#banner">Home</a></li>
                <li><a href="#portfolio">Works</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Interactive Banner Page -->
    <section class="banner" id="interactiveBanner">
        <div class="spotlight" id="spotlight"></div>
        <div class="banner-badge">🎨 Creative Graphic Designer</div>
        <h1>Visual Storytelling <br><span>Built with Precision</span></h1>
        <p>Transforming complex ideas into sleek, minimalist, and striking visual identities that captivate audiences.</p>
        <a href="#portfolio" class="btn-primary">Explore Works</a>
    </section>


    <!-- Social Media & Contact Section -->
    <section class="contact-section" id="contact">
        <h2 class="section-title">Let's Work <span>Together</span></h2>
        <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto 1.5rem auto;">Have a project in mind or just want to chat? Reach out through my social channels or drop a message below.</p>
        
        <!-- Social Media Links -->
        <div class="social-links">
            <a href="https://behance.net" target="_blank" class="social-btn">Behance</a>
            <a href="https://instagram.com" target="_blank" class="social-btn">Instagram</a>
            <a href="https://dribbble.com" target="_blank" class="social-btn">Dribbble</a>
            <a href="https://linkedin.com" target="_blank" class="social-btn">LinkedIn</a>
        </div>

        <!-- Contact Form (Tied to PHP backend) -->
        <form class="contact-form" action="mail.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email Address" required>
            </div>
            <div class="form-group">
                <textarea name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
            </div>
            <input type="submit" name="send" value="Send Message" class="btn-primary" style="width: 100%; border-radius: 12px; cursor: pointer;">
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Graphic Design Portfolio. All rights reserved.</p>
    </footer>

    <!-- Link JavaScript -->
    <script src="script.js"></script>
</body>
</html>