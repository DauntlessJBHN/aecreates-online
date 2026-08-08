document.addEventListener("DOMContentLoaded", () => {
    // 1. Interactive Loading Screen Animation
    const loader = document.getElementById("loader");
    setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.visibility = "hidden";
    }, 1000); // Fades out smoothly after 1 second

    // 2. Interactive Spotlight Follower on Banner
    const banner = document.getElementById("interactiveBanner");
    const spotlight = document.getElementById("spotlight");

    if (banner && spotlight) {
        banner.addEventListener("mousemove", (e) => {
            const rect = banner.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            spotlight.style.left = `${x}px`;
            spotlight.style.top = `${y}px`;
        });
    }

    // 3. Contact Form Interactive Feedback
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector("button");
            const originalText = submitBtn.textContent;

            submitBtn.textContent = "✨ Message Sent Successfully!";
            submitBtn.style.background = "#10b981";
            contactForm.reset();

            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.style.background = "var(--accent)";
            }, 4000);
        });
    }
});