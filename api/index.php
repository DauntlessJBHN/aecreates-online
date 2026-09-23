<?php
// Call the separate router file
require_once __DIR__ . '/router.php';

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aecreates</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $asset_base; ?>/css/style.css">
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="<?php echo $asset_base; ?>/images/aecreates.png">   
</head>

<body> 
    <header>
        <a href="#" class="logo"><span>aecreates</span>.online</a>
        <nav>
            <ul>
                <li><a href="#banner">Home</a></li>
                <li><a href="#portfolio">Works</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner" id="banner">
        <!-- MAIN TITLE -->
         
    <div class="main=box">
    <div class="bounding-box-wrapper" id="boundingBox">
        <!-- Selection Handles -->
        <div class="handle handle-tl"></div>
        <div class="handle handle-tc"></div>
        <div class="handle handle-tr"></div>
        <div class="handle handle-ml"></div>
        <div class="handle handle-mr"></div>
        <div class="handle handle-bl"></div>
        <div class="handle handle-bc"></div>
        <div class="handle handle-br"></div>

        <h1 class="tagline" id="typedText"></h1><span class="cursor" id="cursor"></span>
    </div>

    <script>
        const textTarget = document.getElementById('typedText');
        const plainText = 'Aecreates';
        
        let charIndex = 0;
        let isDeleting = false;
        const typingSpeed = 120;
        const deletingSpeed = 80;
        const holdTime = 5000; // Pause for 5 seconds before backspacing

        function loopTyping() {
            if (!isDeleting) {
                // Forward typing animation
                if (charIndex <= plainText.length) {
                    if (charIndex <= 2) {
                        textTarget.innerHTML = plainText.substring(0, charIndex);
                    } else {
                        textTarget.innerHTML = 'Ae<span>' + plainText.substring(2, charIndex) + '</span>';
                    }
                    charIndex++;
                    setTimeout(loopTyping, typingSpeed);
                } else {
                    // Fully typed out, pause for 5 seconds then switch to deleting state
                    isDeleting = true;
                    setTimeout(loopTyping, holdTime);
                }
            } else {
                // Backward backspace animation
                if (charIndex >= 0) {
                    if (charIndex <= 2) {
                        textTarget.innerHTML = plainText.substring(0, charIndex);
                    } else {
                        textTarget.innerHTML = 'Ae<span>' + plainText.substring(2, charIndex) + '</span>';
                    }
                    charIndex--;
                    setTimeout(loopTyping, deletingSpeed);
                } else {
                    // Fully backspaced, reset states and restart typing loop
                    isDeleting = false;
                    charIndex = 0;
                    setTimeout(loopTyping, 400);
                }
            }
        }

        // Start loop on load
        setTimeout(loopTyping, 600);
    </script>

    <!-- END OF MAIN TITLE -->
    
    <p>Let us turn ideas into visual experiences that connect, communicate, and <b style="color: #2cbae2;">stand out</b>.</p>
    <a href="#portfolio" class="btn-primary">Explore Creations</a>
    </div>
    
    </section>

        <section class="banner-gallery-section" id="portfolio">
        <div class="gallery-header">
            <h1>Featured Creations</h1>
            <p>Highlighting core brand identities, design systems, and key creative pieces.</p>
        </div>

        <div class="gallery-header">
        <a href="underconstruction" class="btn-primary">View All Creations Archive</a>
        </div>

        <!-- 5-Work Asymmetrical Landscape Bento Grid -->
        <div class="gallery-grid">
            <!-- Work 1 (Hero Large Landscape) -->
            <div class="gallery-item item-1" 
                 data-title="Likha ni El: Arts and Crafts Store" 
                 data-category="Business Visual Identity" 
                 data-description="Likha ni El is a thoughtful visual identity project that blends artisanal craftsmanship with modern digital aesthetics through a cohesive logo, color palette, and social media system. Every branding element was meticulously crafted to elevate the client experience and establish a distinctive, authentic presence in the market."
                 data-img="<?php echo $asset_base; ?>/images/portfolio/likha ni el/Banner Page.png">
                <img src="<?php echo $asset_base; ?>/images/portfolio/likha ni el/Banner Page.png" alt="Likha ni El: Arts and Crafts Store">
                <div class="gallery-overlay">
                    <span class="project-category">Business Visual Identity</span>
                    <h3 class="project-title">Likha ni El: Arts and Crafts Store</h3>
                </div>
            </div>

            <!-- Work 2 -->
            <div class="gallery-item item-2" 
                 data-title="Society of Petroleum Engineering AY 2025-2026" 
                 data-category="Social Media Branding & Campaigns" 
                 data-description="Custom structural styling and sophisticated label design curated for high-end consumer goods and local artisan showcases."
                 data-img="<?php echo $asset_base; ?>/images/portfolio/spe/Banner Page.png">
                <img src="<?php echo $asset_base; ?>/images/portfolio/spe/Banner Page.png" alt="Society of Petroleum Engineering AY 2025-2026">
                <div class="gallery-overlay">
                    <span class="project-category">Social Media Branding & Campaigns</span>
                    <h3 class="project-title">Society of Petroleum Engineering AY 2025-2026</h3>
                </div>
            </div>

            <!-- Work 3 -->
            <div class="gallery-item item-3" 
                 data-title="FUEL'D: Merch Line" 
                 data-category="Merchandise Design" 
                 data-description="Futuristic layout concepts and digital UI branding assets designed for modern interactive web platforms."
                 data-img="<?php echo $asset_base; ?>/images/portfolio/fueld/Banner Page.png">
                <img src="<?php echo $asset_base; ?>/images/portfolio/fueld/Banner Page.png" alt="FUEL'D: Merch Line">
                <div class="gallery-overlay">
                    <span class="project-category">Merchandise Design</span>
                    <h3 class="project-title">FUEL'D: Merch Line</h3>
                </div>
            </div>

            <!-- Work 4 -->
            <div class="gallery-item item-4" 
                 data-title="Editorial & Print Layout" 
                 data-category="Print Media" 
                 data-description="Precision-crafted grid layouts and typography systems for high-end editorial publications and collateral."
                 data-img="https://images.unsplash.com/photo-1542744094-24638eff58bb?q=80&w=1200&auto=format&fit=crop">
                <img src="https://images.unsplash.com/photo-1542744094-24638eff58bb?q=80&w=1200&auto=format&fit=crop" alt="Editorial Layout">
                <div class="gallery-overlay">
                    <span class="project-category">Print Media</span>
                    <h3 class="project-title">Editorial & Print Layout</h3>
                </div>
            </div>

            <!-- Work 5 -->
            <div class="gallery-item item-5" 
                 data-title="Motion & Key Visuals" 
                 data-category="Creative Direction" 
                 data-description="Dynamic promotional graphics, campaign key art, and visual identity extensions for large-scale creative initiatives."
                 data-img="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1200&auto=format&fit=crop">
                <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1200&auto=format&fit=crop" alt="Motion & Key Visuals">
                <div class="gallery-overlay">
                    <span class="project-category">Creative Direction</span>
                    <h3 class="project-title">Motion & Key Visuals</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal Component -->
    <div class="lightbox-modal" id="lightboxModal">
        <div class="lightbox-content">
            <button class="close-btn" id="closeModal">&times;</button>
            <div class="lightbox-image-container">
                <img id="modalImg" src="" alt="Project Preview">
            </div>
            <div class="lightbox-details">
                <span class="project-category" id="modalCategory" style="display:block; margin-bottom:0.4rem;">Category</span>
                <h2 id="modalTitle">Project Title</h2>
                <p id="modalDesc">Detailed project description goes here.</p>
                <a href="#" class="view-project-btn" id="modalLink">Explore Full Case Study</a>
            </div>
        </div>
    </div>

    <!-- Social Media & Contact Section -->
    <section class="contact-section" id="contact">
        <h2 class="section-title">Let's Work <span>Together</span></h2>
        <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto 1.5rem auto;">Have a project in mind or just want to chat? <br> Reach out through my social channels or drop a message below.</p>
        
        <!-- Social Media Links -->
        <div class="social-links">
            <a href="https://facebook.com/aecreates.by.ae" target="_blank" class="btn-primary">Facebook</a>
            <a href="https://linkedin.com/in/aerolle-sana" target="_blank" class="btn-primary">LinkedIn</a>
        </div>

        <!-- Contact Form (Tied to PHP backend) -->
        <form class="contact-form" action="mail" method="post">
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

    
    <footer>
        <p>&copy; 2026 Aecreates Graphic Design Portfolio. All rights reserved.</p>
    </footer>

</body>

<script src="<?php echo $asset_base; ?>/js/script.js" defer></script>
</html>