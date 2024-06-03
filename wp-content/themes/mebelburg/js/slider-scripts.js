const swiper = new Swiper('.hero-slider', {
    slidesPerView: 1,
    loop: true,
    effect: 'fade',
    grabCursor: true, 
    navigation: {
    nextEl: '.hero-slider__button-next',
    prevEl: '.hero-slider__button-prev',
    },
  
  });

  const swiperCats = new Swiper('.cats-slider', {
    //slidesPerView: auto,
    loop: true,
    spaceBetween: 5,
    //mousewheelControl: true,
    //effect: 'fade',
    //grabCursor: true, 
    // navigation: {
    // nextEl: '.hero-slider__button-next',
    // prevEl: '.hero-slider__button-prev',
    // },
  
  });