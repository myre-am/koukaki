const titles = document.querySelectorAll('.js-fade-in-title');

let config = {
    rootMargin: '0px',
    threshold: 0.5
};

let observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            intersectionHandler(entry);
        }
    });
}, config);

titles.forEach(title => {
    observer.observe(title);
});

function intersectionHandler(entry) {
    const current = document.querySelector('.section.active');
    const next = entry.target.closest('.section');

    if (current) {
        current.classList.remove('active');
    }
    if (next) {
        next.classList.add('active');
    }
}

