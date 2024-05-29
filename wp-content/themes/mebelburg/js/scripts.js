document.addEventListener("DOMContentLoaded", () => {
    
    let body = $('body');
    let menu = $('.container nav');

    if( window.innerWidth >= 1200 ){
   
    let navItemLength = document.querySelectorAll('nav .main-menu li').length;
    let ourLogo = document.querySelector('.container .header__inner__logo');

    let menuItems = document.querySelectorAll('nav .main-menu li:nth-child(' + Math.floor(navItemLength / 2+1) + ')');

    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].after(ourLogo);
    }
    }

    $(document).on('click', '.header__inner__burger', function () {
        $(this).toggleClass('_open');
        menu.toggleClass('_open');
        body.toggleClass('_fixed');
      });
  

    
});


