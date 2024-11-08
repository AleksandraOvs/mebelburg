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

  const swiperScheme = new Swiper('.floors-slider', {
    slidesPerView: 1,
    //loop: true,
    //effect: 'fade',
    grabCursor: true, 
    navigation: {
    nextEl: '.floors-slider__button-next',
    prevEl: '.floors-slider__button-prev',
    },
  
  });

  const swiperCats = new Swiper('.cats-slider', {
    loop: true,
    spaceBetween: 5,
    grabCursor: true
    //centeredSlides: true
  });

  const swiperLec = new Swiper('.page-lectory-slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 18,
    grabCursor: true,
    navigation: {
      nextEl: '.lec-slider__button-next',
      prevEl: '.lec-slider__button-prev',
      },
    breakpoints:{
      768:{
        slidesPerView: 2,
      }
    }
    //centeredSlides: true
  });