<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDIO VECTRA | Graphic Design Portfolio</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #09090b;
        }
        ::-webkit-scrollbar-thumb {
            background: #27272a;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3f3f46;
        }
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.95) translateY(15px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        .animate-fade-in {
            animation: fadeInScale 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .masonry-grid {
            column-count: 1;
            column-gap: 1.5rem;
        }
        @media(min-width: 640px) {
            .masonry-grid { column-count: 2; }
        }
        @media(min-width: 1024px) {
            .masonry-grid { column-count: 3; }
        }
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body class="bg-white text-slate-900 font-sans antialiased selection:bg-slate-900 selection:text-white"">

    <header class="sticky top-0 z-40 backdrop-blur-xl bg-brand-950/80 border-b border-zinc-800/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-sky-300 to-sky-300 flex items-center justify-center font-extrabold text-white shadow-lg shadow-sky-500/25 group-hover:scale-105 transition-transform duration-300">
                    SV
                </div>
                <div>
                    <span class="font-bold tracking-wider text-base block leading-none text-white">STUDIO VECTRA</span>
                    <span class="text-[11px] text-zinc-400 font-medium tracking-wide">CURATED DESIGN GALLERY</span>
                </div>
            </a>
            <div class="flex items-center gap-4">
                <span class="hidden md:inline-flex items-center gap-2 text-xs font-semibold px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Available for Commissions
                </span>
                <a href="#contact" class="text-xs font-semibold px-5 py-2.5 rounded-full bg-zinc-900 border border-zinc-800 hover:bg-zinc-800 hover:border-zinc-700 transition-all text-zinc-200">
                    Contact Us
                </a>
            </div>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-6 pt-20 pb-12 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8 border-b border-zinc-900">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 text-indigo-400 text-xs font-semibold mb-6 border border-indigo-500/20">
                <i class="fa-solid fa-sparkles text-indigo-400"></i> Visual Artistry & Brand Ecosystems
            </div>
            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-white mb-6 leading-[1.08]">
                Elevating brands through <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">world-class design.</span>
            </h1>
            <p class="text-zinc-400 text-base sm:text-lg leading-relaxed max-w-2xl">
                Explore our curated gallery showcasing meticulous brand identities, custom typography experiments, immersive digital interfaces, and high-impact print works.
            </p>
        </div>
        <div class="bg-zinc-900/60 p-6 rounded-2xl border border-zinc-800/80 backdrop-blur w-full md:w-auto min-w-[280px]">
            <div class="text-xs font-semibold text-zinc-400 uppercase tracking-widest mb-3">Gallery Breakdown</div>
            <div class="grid grid-cols-2 gap-3 text-left">
                <div class="bg-zinc-900/90 p-3 rounded-xl border border-zinc-800">
                    <span class="block text-2xl font-bold text-indigo-400">14+</span>
                    <span class="text-xs text-zinc-400">Masterpieces</span>
                </div>
                <div class="bg-zinc-900/90 p-3 rounded-xl border border-zinc-800">
                    <span class="block text-2xl font-bold text-purple-400">6</span>
                    <span class="text-xs text-zinc-400">Categories</span>
                </div>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10 pb-6 border-b border-zinc-900">
            <div class="flex flex-wrap items-center gap-2" id="filter-tabs">
                <button data-filter="all" class="filter-btn active px-4 py-2 rounded-full text-xs font-semibold transition-all bg-white text-zinc-950 shadow-md">All Works</button>
                <button data-filter="branding" class="filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all bg-zinc-900 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-800">Branding</button>
                <button data-filter="illustration" class="filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all bg-zinc-900 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-800">Illustration</button>
                <button data-filter="typography" class="filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all bg-zinc-900 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-800">Typography</button>
                <button data-filter="digital" class="filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all bg-zinc-900 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-800">Digital</button>
                <button data-filter="print" class="filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all bg-zinc-900 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-800">Print</button>
            </div>
            <div class="text-xs text-zinc-500 font-medium" id="gallery-counter">Showing all 14 projects</div>
        </div>

        <div id="gallery-masonry" class="masonry-grid">
            <!-- Dynamic masonry cards injected via JavaScript -->
        </div>
    </main>

    <div id="lightbox-modal" class="fixed inset-0 z-50 bg-black/95 backdrop-blur-2xl hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4 sm:p-8" role="dialog" aria-modal="true">
        <button id="lightbox-close" class="absolute top-6 right-6 z-50 w-12 h-12 rounded-full bg-zinc-900/90 hover:bg-zinc-800 text-white flex items-center justify-center transition-all border border-zinc-700/60 shadow-2xl group focus:outline-none">
            <i class="fa-solid fa-xmark text-lg group-hover:rotate-90 transition-transform duration-300"></i>
        </button>

        <button id="lightbox-prev" class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-40 w-12 h-12 rounded-full bg-zinc-900/90 hover:bg-zinc-800 text-white flex items-center justify-center transition-all border border-zinc-700/60 shadow-2xl hover:scale-105 focus:outline-none">
            <i class="fa-solid fa-chevron-left text-sm"></i>
        </button>

        <button id="lightbox-next" class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-40 w-12 h-12 rounded-full bg-zinc-900/90 hover:bg-zinc-800 text-white flex items-center justify-center transition-all border border-zinc-700/60 shadow-2xl hover:scale-105 focus:outline-none">
            <i class="fa-solid fa-chevron-right text-sm"></i>
        </button>

        <div class="max-w-5xl max-h-[90vh] w-full flex flex-col items-center justify-center relative">
            <div class="overflow-hidden rounded-2xl max-h-[65vh] flex items-center justify-center shadow-2xl bg-zinc-900 border border-zinc-800">
                <img id="lightbox-image" src="" alt="Enlarged design work" class="max-h-[65vh] w-auto object-contain select-none transition-transform duration-300">
            </div>
            <div class="mt-6 text-center max-w-xl px-4">
                <span id="lightbox-tag" class="inline-block text-xs font-semibold px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-400 mb-2 border border-indigo-500/30"></span>
                <h3 id="lightbox-title" class="text-2xl font-bold text-white mb-2"></h3>
                <p id="lightbox-description" class="text-sm text-zinc-400 leading-relaxed"></p>
                <div class="mt-4 text-xs font-medium text-zinc-500" id="lightbox-counter">1 / 14</div>
            </div>
        </div>
    </div>

    <footer id="contact" class="border-t border-zinc-900 py-16 mt-24 bg-brand-950">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white text-sm">SV</div>
                    <span class="font-bold tracking-wider text-lg text-white">STUDIO VECTRA</span>
                </div>
                <p class="text-sm text-zinc-400 leading-relaxed max-w-md">
                    We craft exquisite visual identities and digital design experiences that captivate audiences and elevate brands to extraordinary heights.
                </p>
                <div class="mt-6 flex items-center gap-4 text-zinc-400">
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 hover:bg-zinc-800 flex items-center justify-center hover:text-white transition-colors border border-zinc-800"><i class="fa-brands fa-behance"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 hover:bg-zinc-800 flex items-center justify-center hover:text-white transition-colors border border-zinc-800"><i class="fa-brands fa-dribbble"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 hover:bg-zinc-800 flex items-center justify-center hover:text-white transition-colors border border-zinc-800"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 hover:bg-zinc-800 flex items-center justify-center hover:text-white transition-colors border border-zinc-800"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
            <div class="bg-zinc-900/50 p-8 rounded-2xl border border-zinc-800/80 backdrop-blur">
                <h3 class="text-lg font-bold text-white mb-2">Let's Create Together</h3>
                <p class="text-xs text-zinc-400 mb-6">Have a project in mind or want to discuss a commission? Reach out directly.</p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Enter your email address" class="bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 flex-1">
                    <button onclick="alert('Thank you! We will get in touch with you shortly.')" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-3 rounded-xl text-sm transition-all shadow-lg shadow-indigo-600/30">
                        Inquire
                    </button>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 pt-12 mt-12 border-t border-zinc-900 text-center sm:text-left flex flex-col sm:flex-row items-center justify-between text-xs text-zinc-500">
            <p>© 2026 Studio Vectra. All rights reserved.</p>
            <p class="mt-2 sm:mt-0">Designed with passion, Tailwind CSS & JavaScript.</p>
        </div>
    </footer>

    <script>
        const portfolioWorks = [
            {
                id: 1,
                title: "Vortex Brand Identity System",
                category: "branding",
                categoryName: "Branding",
                image: "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80",
                description: "Comprehensive visual identity system featuring dynamic logotype, custom geometric iconographies, and corporate stationary suites."
            },
            {
                id: 2,
                title: "Neon Cyberpunk Vector Art",
                category: "illustration",
                categoryName: "Illustration",
                image: "https://images.unsplash.com/photo-1550684848-fac1c5b4e853?auto=format&fit=crop&w=1200&q=80",
                description: "High-detail vector cyberpunk street scene exploring neon luminescence, moody atmospheric gradients, and futuristic streetscapes."
            },
            {
                id: 3,
                title: "Kinetix Typeface Specimen",
                category: "typography",
                categoryName: "Typography",
                image: "https://images.unsplash.com/photo-1541701494587-cb58502866ab?auto=format&fit=crop&w=1200&q=80",
                description: "Custom geometric sans-serif typeface specimen poster designed with stark contrast, precise kerning, and editorial grid alignment."
            },
            {
                id: 4,
                title: "Fintech Mobile Dashboard UI",
                category: "digital",
                categoryName: "Digital",
                image: "https://images.unsplash.com/photo-1616469829941-c7200edec809?auto=format&fit=crop&w=1200&q=80",
                description: "Sleek neomorphic dark-mode mobile banking application focused on frictionless micro-interactions and instant financial telemetry."
            },
            {
                id: 5,
                title: "Avant-Garde Architecture Monograph",
                category: "print",
                categoryName: "Print",
                image: "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80",
                description: "Hardcover editorial layout celebrating brutalist architectural forms with generous whitespace and swiss typographic grids."
            },
            {
                id: 6,
                title: "Botanical Serenade Packaging",
                category: "branding",
                categoryName: "Branding",
                image: "https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=1200&q=80",
                description: "Sustainable organic skincare packaging design featuring embossed botanical illustrations and tactile matte finishes."
            },
            {
                id: 7,
                title: "Surrealist Dreamscape Illustration",
                category: "illustration",
                categoryName: "Illustration",
                image: "https://images.unsplash.com/photo-1579783902614-a3fb3927b675?auto=format&fit=crop&w=1200&q=80",
                description: "Digital painting capturing a surreal cosmic landscape with vibrant pastel lighting and intricate environmental depth."
            },
            {
                id: 8,
                title: "Editorial Poster Series Vol. 4",
                category: "typography",
                categoryName: "Typography",
                image: "https://images.unsplash.com/photo-1563089145-599997674d42?auto=format&fit=crop&w=1200&q=80",
                description: "Experimental typographic poster series experimenting with overlapping glyph scales, distressed textures, and bold color blocking."
            },
            {
                id: 9,
                title: "SaaS Analytics Web Application",
                category: "digital",
                categoryName: "Digital",
                image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80",
                description: "Comprehensive enterprise analytics dashboard featuring customizable data cards, fluid charts, and modular widgets."
            },
            {
                id: 10,
                title: "Independent Fashion Zine",
                category: "print",
                categoryName: "Print",
                image: "https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=1200&q=80",
                description: "Independent risograph printed fashion zine featuring raw layout compositions, split-fountain inks, and custom editorial folds."
            },
            {
                id: 11,
                title: "Apex Coffee Roasters Branding",
                category: "branding",
                categoryName: "Branding",
                image: "https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=1200&q=80",
                description: "Craft coffee bag packaging and tactile brand identity system designed for specialty single-origin micro-lots."
            },
            {
                id: 12,
                title: "Cosmic Odyssey Vector Poster",
                category: "illustration",
                categoryName: "Illustration",
                image: "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80",
                description: "Vector space-themed poster art utilizing retro-futuristic color palettes and clean geometric linework."
            },
            {
                id: 13,
                title: "Kinetic Typography Motion Reel",
                category: "typography",
                categoryName: "Typography",
                image: "https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=1200&q=80",
                description: "Dynamic typographic motion design project exploring rhythmic pacing, variable font weights, and kinetic choreography."
            },
            {
                id: 14,
                title: "Immersive Web3 NFT Gallery UI",
                category: "digital",
                categoryName: "Digital",
                image: "https://images.unsplash.com/photo-1639762681485-074b7f938ba0?auto=format&fit=crop&w=1200&q=80",
                description: "Futuristic decentralized web application interface featuring glassmorphic cards, glowing accents, and immersive 3D viewer integration."
            }
        ];

        let activeFilter = 'all';
        let currentFilteredWorks = [...portfolioWorks];
        let currentLightboxIndex = 0;

        const masonryGrid = document.getElementById('gallery-masonry');
        const galleryCounter = document.getElementById('gallery-counter');
        const lightboxModal = document.getElementById('lightbox-modal');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDescription = document.getElementById('lightbox-description');
        const lightboxTag = document.getElementById('lightbox-tag');
        const lightboxCounter = document.getElementById('lightbox-counter');
        const lightboxClose = document.getElementById('lightbox-close');
        const lightboxPrev = document.getElementById('lightbox-prev');
        const lightboxNext = document.getElementById('lightbox-next');

        function renderGallery(filter) {
            activeFilter = filter;
            currentFilteredWorks = filter === 'all' 
                ? [...portfolioWorks] 
                : portfolioWorks.filter(work => work.category === filter);

            galleryCounter.textContent = `Showing ${currentFilteredWorks.length} projects`;
            masonryGrid.innerHTML = '';

            currentFilteredWorks.forEach((work, index) => {
                const item = document.createElement('div');
                item.className = 'masonry-item animate-fade-in group relative rounded-2xl overflow-hidden bg-zinc-900 border border-zinc-800/80 cursor-pointer shadow-xl hover:shadow-indigo-500/10 hover:border-zinc-700 transition-all duration-300';
                item.style.animationDelay = `${index * 0.04}s`;

                item.innerHTML = `
                    <div class="overflow-hidden bg-zinc-950 relative">
                        <img src="${work.image}" alt="${work.title}" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/95 via-zinc-950/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-[11px] font-semibold text-indigo-400 uppercase tracking-widest">${work.categoryName}</span>
                                    <h3 class="text-base font-bold text-white mt-1">${work.title}</h3>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white transform translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg">
                                    <i class="fa-solid fa-magnifying-glass-plus text-xs"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                item.addEventListener('click', () => openLightbox(index));
                masonryGrid.appendChild(item);
            });
        }

        function openLightbox(index) {
            currentLightboxIndex = index;
            updateLightboxContent();
            lightboxModal.classList.remove('hidden');
            setTimeout(() => {
                lightboxModal.classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightboxModal.classList.add('opacity-0');
            setTimeout(() => {
                lightboxModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        function updateLightboxContent() {
            const work = currentFilteredWorks[currentLightboxIndex];
            lightboxImage.src = work.image;
            lightboxTitle.textContent = work.title;
            lightboxDescription.textContent = work.description;
            lightboxTag.textContent = work.categoryName;
            lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${currentFilteredWorks.length}`;
        }

        function nextLightboxItem() {
            currentLightboxIndex = (currentLightboxIndex + 1) % currentFilteredWorks.length;
            updateLightboxContent();
        }

        function prevLightboxItem() {
            currentLightboxIndex = (currentLightboxIndex - 1 + currentFilteredWorks.length) % currentFilteredWorks.length;
            updateLightboxContent();
        }

        // Filter button event listeners
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('bg-white', 'text-zinc-950', 'shadow-md');
                    b.classList.add('bg-zinc-900', 'text-zinc-400', 'border', 'border-zinc-800');
                });
                e.target.classList.remove('bg-zinc-900', 'text-zinc-400', 'border', 'border-zinc-800');
                e.target.classList.add('bg-white', 'text-zinc-950', 'shadow-md');

                renderGallery(e.target.dataset.filter);
            });
        });

        // Lightbox events
        lightboxClose.addEventListener('click', closeLightbox);
        lightboxNext.addEventListener('click', nextLightboxItem);
        lightboxPrev.addEventListener('click', prevLightboxItem);

        lightboxModal.addEventListener('click', (e) => {
            if (e.target === lightboxModal) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (lightboxModal.classList.contains('hidden')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextLightboxItem();
            if (e.key === 'ArrowLeft') prevLightboxItem();
        });

        // Initialize gallery on load
        window.addEventListener('DOMContentLoaded', () => {
            renderGallery('all');
        });
    </script>
</body>
</html>