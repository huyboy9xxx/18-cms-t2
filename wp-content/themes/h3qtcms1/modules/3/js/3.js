$(document).ready(function () {
    var swiper3 = new Swiper('.type-3 .swiper-container', {
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
            spaceBetween: 20,
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