// Sample gallery items data (replace with your own image URLs and titles)
const portfolioItems = [
    {
        id: 1,
        title: "Brand Identity System",
        category: "Visual Identity",
        image: "https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=1200&q=80"
    },
    {
        id: 2,
        title: "Editorial Layout & Typography",
        category: "Print Design",
        image: "https://images.unsplash.com/photo-1542744094-3a31246263d0?auto=format&fit=crop&w=1200&q=80"
    },
    {
        id: 3,
        title: "Minimalist Packaging Concept",
        category: "Packaging",
        image: "https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?auto=format&fit=crop&w=1200&q=80"
    },
    {
        id: 4,
        title: "Digital Art Direction",
        category: "Digital",
        image: "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80"
    },
    {
        id: 5,
        title: "Exhibition Poster Series",
        category: "Print Design",
        image: "https://images.unsplash.com/photo-1579783900882-c0d3dad7b119?auto=format&fit=crop&w=1200&q=80"
    },
    {
        id: 6,
        title: "Modern Monogram Suite",
        category: "Visual Identity",
        image: "https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?auto=format&fit=crop&w=1200&q=80"
    }
];

const galleryGrid = document.getElementById('galleryGrid');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const lightboxCaption = document.getElementById('lightboxCaption');
const lightboxClose = document.getElementById('lightboxClose');
const lightboxPrev = document.getElementById('lightboxPrev');
const lightboxNext = document.getElementById('lightboxNext');

let currentIndex = 0;

// Render gallery items
function renderGallery() {
    galleryGrid.innerHTML = portfolioItems.map((item, index) => `
        <div class="gallery-item" data-index="${index}">
            <div class="image-wrapper">
                <img src="${item.image}" alt="${item.title}" loading="lazy">
                <div class="image-overlay">
                    <div class="overlay-content">
                        <h3>${item.title}</h3>
                        <p>${item.category}</p>
                    </div>
                </div>
            </div>
        </div>
    `).join('');

    // Attach click events to items
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', () => {
            currentIndex = parseInt(item.getAttribute('data-index'));
            openLightbox(currentIndex);
        });
    });
}

// Lightbox Controls
function openLightbox(index) {
    const item = portfolioItems[index];
    lightboxImg.src = item.image;
    lightboxCaption.textContent = `${item.title} — ${item.category}`;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    lightbox.classList.remove('active');
    document.body.style.overflow = 'auto';
}

function showPrev() {
    currentIndex = (currentIndex - 1 + portfolioItems.length) % portfolioItems.length;
    openLightbox(currentIndex);
}

function showNext() {
    currentIndex = (currentIndex + 1) % portfolioItems.length;
    openLightbox(currentIndex);
}

// Event Listeners
lightboxClose.addEventListener('click', closeLightbox);
lightboxPrev.addEventListener('click', showPrev);
lightboxNext.addEventListener('click', showNext);

lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
        closeLightbox();
    }
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') showPrev();
    if (e.key === 'ArrowRight') showNext();
});

// Initialize Gallery on load
document.addEventListener('DOMContentLoaded', renderGallery);