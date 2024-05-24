<?php get_header() ?>

<?php get_template_part('templates/hero-block')?>
<section class="section-adv">
    <div class="container">
        <h2 class="section-adv__title">Больше, чем просто мебельный</h2>
        <ul class="section-adv__grid">
            <li class="section-adv__grid__item border" style="background-color:#fff; background-image:url(<?php echo get_stylesheet_directory_uri() . '/images/adv1.svg' ?>); background-repeat:no-repeat; background-position: center;">
               
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"><p>03</p></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
            <li class="section-adv__grid__item box2">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv2.jpg' ?>" alt="" class="section-adv__grid__item__img">
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
            <li class="section-adv__grid__item" style="background-color:#fff; background-image:url(<?php echo get_stylesheet_directory_uri() . '/images/adv3.svg' ?>); background-repeat:no-repeat; background-position: center;">
               
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
            <li class="section-adv__grid__item bg-beige" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/images/adv4.svg' ?>); background-repeat:no-repeat; background-position: center;">
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
            <li class="section-adv__grid__item">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv5.png' ?>" alt="" class="section-adv__grid__item__img">
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
            <li class="section-adv__grid__item">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv6.png' ?>" alt="" class="section-adv__grid__item__img">
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
            <li class="section-adv__grid__item bg-purple" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/images/adv4.svg' ?>); background-repeat:no-repeat; background-position: center;">
                
                <div class="section-adv__grid__item__content">
                    <div class="section-adv__grid__item__content__top"></div>
                    <div class="section-adv__grid__item__content__bottom"></div>
                </div>
            </li>
        </ul>
    </div>
</section>

<?php get_footer() ?>