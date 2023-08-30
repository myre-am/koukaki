document.addEventListener('DOMContentLoaded', () => {
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

})