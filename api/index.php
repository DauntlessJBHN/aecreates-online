<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aecreates</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="../public/images/aecreates.png">   
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

    <section class="banner" id="interactiveBanner">
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
    </div>
    <p>Let us turn ideas into visual experiences that connect, communicate, and <b style="color: #2cbae2;">stand out</b>.</p>
    <a href="../api/underconstruction/" class="btn-primary">Explore Works</a>
    </section>


    <!-- Social Media & Contact Section -->
    <section class="contact-section" id="contact">
        <h2 class="section-title">Let's Work <span>Together</span></h2>
        <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto 1.5rem auto;">Have a project in mind or just want to chat? <br> Reach out through my social channels or drop a message below.</p>
        
        <!-- Social Media Links -->
        <div class="social-links">
            <a href="https://behance.net" target="_blank" class="btn-primary">Facebook</a>
            <a href="https://linkedin.com" target="_blank" class="btn-primary">LinkedIn</a>
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

    
    <footer>
        <p>&copy; 2026 Aecreates Graphic Design Portfolio. All rights reserved.</p>
    </footer>


    <script src="../public/js/script.js"></script>
</body>

</html>