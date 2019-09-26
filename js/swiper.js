var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    // direction: 'vertical',
    slidesPerView: 3,
    loop: false,
    centeredSlides: false,
    spaceBetween: 30,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // breakpoints: {
    //     1250: {
    //       slidesPerView: 4,
    //       spaceBetween: 40,
    //     },
    //     900: {
    //       slidesPerView: 3,
    //       spaceBetween: 30,
    //     },
    //     700: {
    //       slidesPerView: 2,
    //       spaceBetween: 20,
    //     },
    //     450: {
    //       slidesPerView: 1,
    //       spaceBetween: 20,
    //     },
    //   }
  })