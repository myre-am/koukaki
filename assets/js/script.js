document.addEventListener('DOMContentLoaded', () => {
    const s = skrollr.init();
    // Reveal title on intersection
    const revealTitle = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.querySelectorAll('span').forEach((span, index) => {
                    setTimeout(() => span.classList.add('visible'), index * 100);
                });
            }
        });
    };

    const options = {
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver(revealTitle, options);
    document.querySelectorAll('.title').forEach(title => observer.observe(title));

    // Movement for clouds
    const bigCloud = document.querySelector('.bigcloud');
    const littleCloud = document.querySelector('.littlecloud');

    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        bigCloud.style.transform = `translate3d(${scrollPosition * -0.2}px, 0, 0)`;
        littleCloud.style.transform = `translate3d(${scrollPosition * -0.2}px, 0, 0)`;
    }) 
});