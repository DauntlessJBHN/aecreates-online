<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Banner Gallery - Bento Layout</title>
    <style>
        :root {
            --bg-color: #0d0d0d;
            --card-bg: #161616;
            --text-primary: #ffffff;
            --text-secondary: #a0a0a0;
            --accent: #ff3366;
            --transition: cubic-bezier(0.25, 1, 0.5, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-primary);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            overflow-x: hidden;
        }

        /* Banner Gallery Section */
        .banner-gallery-section {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 4rem 2rem;
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .gallery-header h1 {
            font-size: clamp(2rem, 5vw, 4rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #fff 30%, #777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gallery-header p {
            color: var(--text-secondary);
            font-size: 1.1rem;
        }

        /* Asymmetrical Bento Grid Layout for 5 Landscape Works */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 1.5rem;
            width: 100%;
            max-width: 1300px;
            margin-bottom: 3.5rem;
        }

        .gallery-item {
            position: relative;
            background-color: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: transform 0.4s var(--transition), box-shadow 0.4s var(--transition);
        }

        /* Custom Asymmetrical Spans & Heights (All Landscape) */
        .item-1 { grid-column: span 12; height: 400px; }
        .item-2 { grid-column: span 12; height: 300px; }
        .item-3 { grid-column: span 12; height: 300px; }
        .item-4 { grid-column: span 12; height: 350px; }
        .item-5 { grid-column: span 12; height: 350px; }

        @media (min-width: 768px) {
            .item-1 { grid-column: span 12; height: 460px; }
            .item-2 { grid-column: span 6; height: 340px; }
            .item-3 { grid-column: span 6; height: 340px; }
            .item-4 { grid-column: span 7; height: 380px; }
            .item-5 { grid-column: span 5; height: 380px; }
        }

        @media (min-width: 1024px) {
            .item-1 { grid-column: span 8; height: 480px; }
            .item-2 { grid-column: span 4; height: 480px; }
            .item-3 { grid-column: span 4; height: 360px; }
            .item-4 { grid-column: span 4; height: 360px; }
            .item-5 { grid-column: span 4; height: 360px; }
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s var(--transition), filter 0.5s ease;
        }

        /* Overlay details on hover */
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%);
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s var(--transition), transform 0.4s var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .gallery-item:hover img {
            transform: scale(1.04);
            filter: brightness(0.9);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-item:hover {
            box-shadow: 0 20px 40px rgba(255, 51, 102, 0.15);
            transform: translateY(-4px);
        }

        .project-category {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: var(--accent);
            margin-bottom: 0.4rem;
            font-weight: 700;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
        }

        /* View All Works CTA Button Container */
        .gallery-footer-action {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .view-all-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2.2rem;
            background-color: var(--card-bg);
            color: var(--text-primary);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            transition: all 0.4s var(--transition);
        }

        .view-all-btn svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
            transition: transform 0.3s var(--transition);
        }

        .view-all-btn:hover {
            background-color: var(--text-primary);
            color: var(--bg-color);
            border-color: var(--text-primary);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 51, 102, 0.2);
        }

        .view-all-btn:hover svg {
            transform: translateX(4px);
        }

        /* Lightbox Modal Component */
        .lightbox-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
            padding: 2rem;
            backdrop-filter: blur(8px);
        }

        .lightbox-modal.active {
            opacity: 1;
            pointer-events: auto;
        }

        .lightbox-content {
            position: relative;
            max-width: 900px;
            width: 100%;
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 25px 50px rgba(0,0,0,0.7);
            transform: scale(0.9) translateY(20px);
            transition: transform 0.4s var(--transition);
        }

        .lightbox-modal.active .lightbox-content {
            transform: scale(1) translateY(0);
        }

        .lightbox-image-container {
            width: 100%;
            height: 420px;
            overflow: hidden;
        }

        .lightbox-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .lightbox-details {
            padding: 2rem;
        }

        .lightbox-details h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .lightbox-details p {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            background: rgba(0,0,0,0.6);
            border: none;
            color: #fff;
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, transform 0.2s;
            z-index: 10;
        }

        .close-btn:hover {
            background: var(--accent);
            transform: rotate(90deg);
        }

        .view-project-btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: var(--text-primary);
            color: var(--bg-color);
            font-weight: 700;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.2s, transform 0.2s;
        }

        .view-project-btn:hover {
            background: var(--accent);
            color: #fff;
        }
    </style>
</head>
<body>

    <section class="banner-gallery-section">
        <div class="gallery-header">
            <h1>Featured Works</h1>
            <p>Highlighting core brand identities, design systems, and key creative pieces.</p>
        </div>

        <!-- 5-Work Asymmetrical Landscape Bento Grid -->
        <div class="gallery-grid">
            <!-- Work 1 (Hero Large Landscape) -->
            <div class="gallery-item item-1" 
                 data-title="Flagship Brand Identity" 
                 data-category="Brand Strategy & Visual System" 
                 data-description="A detailed overview of the core brand system, typography hierarchy, and collateral assets designed for maximum market impact."
                 data-img="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1200&auto=format&fit=crop">
                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1200&auto=format&fit=crop" alt="Flagship Brand Identity">
                <div class="gallery-overlay">
                    <span class="project-category">Brand System</span>
                    <h3 class="project-title">Flagship Brand Identity</h3>
                </div>
            </div>

            <!-- Work 2 -->
            <div class="gallery-item item-2" 
                 data-title="Artisan Product Packaging" 
                 data-category="Merchandise & Labeling" 
                 data-description="Custom structural styling and sophisticated label design curated for high-end consumer goods and local artisan showcases."
                 data-img="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop" alt="Artisan Product Packaging">
                <div class="gallery-overlay">
                    <span class="project-category">Product Styling</span>
                    <h3 class="project-title">Artisan Product Packaging</h3>
                </div>
            </div>

            <!-- Work 3 -->
            <div class="gallery-item item-3" 
                 data-title="Digital Experience & UI Kit" 
                 data-category="Digital Media" 
                 data-description="Futuristic layout concepts and digital UI branding assets designed for modern interactive web platforms."
                 data-img="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1200&auto=format&fit=crop">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1200&auto=format&fit=crop" alt="Digital Experience">
                <div class="gallery-overlay">
                    <span class="project-category">Digital Media</span>
                    <h3 class="project-title">Digital Experience</h3>
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

        <!-- Button to Direct to All Works Page -->
        <div class="gallery-footer-action">
            <a href="all-works.html" class="view-all-btn">
                <span>View All Works Archive</span>
                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
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

    <script>
        const galleryItems = document.querySelectorAll('.gallery-item');
        const modal = document.getElementById('lightboxModal');
        const closeModal = document.getElementById('closeModal');
        
        const modalImg = document.getElementById('modalImg');
        const modalTitle = document.getElementById('modalTitle');
        const modalCategory = document.getElementById('modalCategory');
        const modalDesc = document.getElementById('modalDesc');

        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const title = item.getAttribute('data-title');
                const category = item.getAttribute('data-category');
                const desc = item.getAttribute('data-description');
                const imgSrc = item.getAttribute('data-img');

                modalTitle.textContent = title;
                modalCategory.textContent = category;
                modalDesc.textContent = desc;
                modalImg.src = imgSrc;

                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        const closeLightbox = () => {
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        };

        closeModal.addEventListener('click', closeLightbox);

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeLightbox();
            }
        });

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeLightbox();
            }
        });
    </script>
</body>
</html>