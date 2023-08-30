
    const swiper = new Swiper(".swiper", {
        direction: 'horizontal',
        centeredSlides: true,
        slidesPerView: "auto",
        speed: 1000,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        loop: false,
        loopedSlides: 2,
        loopAdditionalSlides: 1,
        effect: "coverflow",
        coverflowEffect: {
            slideShadows: false,
            rotate: 70,
            stretch: 0,
            depth: 50,
            modifier: 1, 
        },
    });
