document.addEventListener("DOMContentLoaded", () => {

    let body = $('body');
    let menu = $('.container nav');
    let textDefault = 'Меню';
    let textOther = 'Закрыть';

    $('.header__inner__burger span').text(textDefault);

    $(document).on('click', '.header__inner__burger', function () {

        textDefault = textOther;
        textOther = $('.header__inner__burger span').text();
        $('.header__inner__burger span').text(textDefault);


        $(this).toggleClass('_open');
        menu.toggleClass('_open');
        body.toggleClass('_fixed');

        // document.querySelector('.header__inner__burger span').innerHTML = 'Закрыть';
    });


    if (window.innerWidth >= 1240) {
        let navItemLength = document.querySelectorAll('nav .main-menu li').length;
        let ourLogo = document.querySelector('.container .header__inner__logo');

        // let menuItems = document.querySelectorAll('nav .main-menu li:nth-child(' + Math.floor(navItemLength / 2 + 1) + ')');

        let menuItems = document.querySelectorAll('nav .main-menu li:nth-child(' + Math.floor(navItemLength / 2) + ')');

        for (var i = 0; i < menuItems.length; i++) {
            menuItems[i].after(ourLogo);
        }
    }

    $(".page-section__title h2").html(function () {

        var text = $(this).text().trim().split(" ");
        var first = text.shift();
        return (text.length >= 0 ? "<span class='first-word'>" + first + "</span> " : first) + text.join(" ");

    });

    if (window.innerWidth <= 768) {
        const policyLink = document.querySelector('.policy-link');
        policyLink.textContent = 'Политика';
    }
    if (window.innerWidth <= 480) {
        const siteDev = document.querySelector('.sitedev-link');
        siteDev.textContent = 'Разработка';
    }

    document.addEventListener('wpcf7mailsent', function (event) {

        if (/rent/.test(location.href)) {
            location = "https://mobelburg.ru/rent/thank-you-rent";
        }

        if (/advertising/.test(location.href)) {
            location = "https://mobelburg.ru/advertising/thank-you-adv";
        }
    }, false);


    // $(function(){
    //     $('.show-hide-btn').click(function(){
    //       $('.section-sale__list__item:nth-child(n+5)').slideToggle('');
    //     $(this).addClass('hide');
    //     });
    //   });

    // let data = Array.from(document.querySelectorAll('.section-sale__list li')),
    //     step = 8,
    //     item = 0;

    // data.slice(step).forEach(e => e.style.display = 'none');
    // item += step;

    // document.querySelector('.show-hide-btn').addEventListener('click', function (e) {
    //     let tmp = data.slice(item, item + step);

        
    //     tmp.forEach(e => e.style.display = 'block');
    //     item += step;

    //     if (tmp.length < 8)
    //         this.remove();
    // });


    let data = Array.from(document.querySelectorAll('.section-sale__list li')),
    step = 8,
    item = 0;

data.slice(step).forEach(e => e.style.display = 'none');
item += step;

document.querySelector('.show-hide-btn').addEventListener('click', function(e){
  let tmp = data.slice(item, item + step);
  tmp.forEach(e => e.style.display = 'block');
  item += step;
  
  if(tmp.length < 8)
    this.remove();
});

});


