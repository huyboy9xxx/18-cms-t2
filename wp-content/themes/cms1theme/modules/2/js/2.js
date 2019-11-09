$(document).ready(function() {
    var swiper2 = new Swiper('.type-2 .swiper-container', {
//        slidesPerView: 4,
        spaceBetween: 10,
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
}); 