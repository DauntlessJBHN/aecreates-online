document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    });

    // Project Filter Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                    setTimeout(() => card.style.opacity = '1', 50);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => card.style.display = 'none', 300);
                }
            });
        });
    });

    // AJAX Handling for Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    const formResponse = document.getElementById('formResponse');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(contactForm);
            
            formResponse.style.color = 'var(--text-muted)';
            formResponse.textContent = 'Sending message...';

            try {
                const response = await fetch('contact.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.text();
                
                if (response.ok) {
                    formResponse.style.color = '#10b981'; // Success Green
                    formResponse.textContent = 'Message sent successfully! Thanks for reaching out.';
                    contactForm.reset();
                } else {
                    throw new Error(result || 'Something went wrong.');
                }
            } catch (error) {
                formResponse.style.color = '#ef4444'; // Error Red
                formResponse.textContent = 'Failed to send message. Please try again later.';
            }
        });
    }
});