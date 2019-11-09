$(document).ready(function () {
    var swiper3 = new Swiper('.type-3 .swiper-container', {
            slidesPerView: 4,
            spaceBetween: 40,
            slidesPerGroup: 4,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
});