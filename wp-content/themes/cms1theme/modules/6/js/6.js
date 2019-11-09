var swiper6 = new Swiper('.type-6 .swiper-container', {
  breakpoints: {
    400: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    600:{
      slidesPerView: 2,
      spaceBetween: 50,
    },
    999: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  },
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


