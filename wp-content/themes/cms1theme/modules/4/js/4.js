var swiper4 = new Swiper('.type-4 .swiper-container', {
    breakpoints: {
        400: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        999: {
            slidesPerView: 4,
            spaceBetween: 8,
        }
    },

    loop: true,
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});