<?php
// Call the separate router file
require __DIR__ . '/../router.php';

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aecreates</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="<?php echo $base_url; ?>/images/aecreates.png">   
</head>
<body>

<?php include __DIR__ . '/../global/header.php'; ?>

<section class="banner" id="interactiveBanner">
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
    </div></div>

    <p>Sorry, this page is still under construction. You can visit our portfolio thru the link below.</p>
    <a href="https://online.pubhtml5.com/bryq/avub/" target="_blank" class="btn-primary">Aecreates Portfolio</a>
</section>
    <script>
        const textTarget = document.getElementById('typedText');
        const plainText = 'Under Construction';
        
        let charIndex = 0;
        let isDeleting = false;
        const typingSpeed = 120;
        const deletingSpeed = 80;
        const holdTime = 5000; // Pause for 5 seconds before backspacing

        function loopTyping() {
            if (!isDeleting) {
                // Forward typing animation
                if (charIndex <= plainText.length) {
                    if (charIndex <= 4) {
                        textTarget.innerHTML = plainText.substring(0, charIndex);
                    } else {
                        textTarget.innerHTML = 'Under<span>' + plainText.substring(5, charIndex) + '</span>';
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
                    if (charIndex <= 4) {
                        textTarget.innerHTML = plainText.substring(0, charIndex);
                    } else {
                        textTarget.innerHTML = 'Under<span>' + plainText.substring(5, charIndex) + '</span>';
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

    <footer>
        <p>&copy; 2026 Aecreates Graphic Design Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>