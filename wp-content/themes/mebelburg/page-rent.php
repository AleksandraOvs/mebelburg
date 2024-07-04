<?php

/**
 * Template name: Страница Аренда
 */
get_header() ?>

<section class="page-section _page-rent" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2><?php the_title() ?></h2>
            </div>

            <div class="page-section__description rent-description">
                <p>
                    Забронируйте место для вашей компании <wbr>в&nbsp;новом&nbsp;интерьерно-выставочном&nbsp;центре
                </p>
            </div>
        </div>

        <h5>Возможности аренды</h5>

        <ul class="section-rent__grid">
            <li class="section-rent__grid__item">
                <img class="section-rent__grid__item__img" src="/" alt="">
                <div class="section-rent__grid__item__content bg-purple">
                    <div class="section-rent__grid__item__content__top color-white">
                        <p>30 236 м<sup>2</sup></p>
                    </div>
                    <div class="section-rent__grid__item__content__bottom color-white">
                        <p>общая площадь<br>
                            интерьерно-выставочного центра</p>
                    </div>
                </div>
            </li>
            <li class="section-rent__grid__item">
                <img class="section-rent__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/rentpic01.jpg' ?>" alt="">
                <div class="section-rent__grid__item__content">
                    <div class="section-rent__grid__item__content__top color-white">
                        <p>17 000 м<sup>2</sup></p>
                    </div>
                    <div class="section-rent__grid__item__content__bottom color-white">
                        <p>площадь магазинов<br>
                            и экспозиций</p>
                    </div>
                </div>
            </li>

                <li class="section-plan__grid__item border" style="background-color:#fff; background-image:url(<?php echo get_stylesheet_directory_uri() . '/images/adv1.svg' ?>); background-repeat:no-repeat; background-position: center;">
                    <div class="section-plan__grid__item__content">
                        <div class="section-plan__grid__item__content__top">
                            <p>03</p>
                        </div>
                        <div class="section-plan__grid__item__content__bottom ">
                            <p>этажа товаров для вашего дома</p>
                        </div>
                    </div>
                </li>
                <li class="section-plan__grid__item">
                    <img class="section-plan__grid__item__img rentpic03" src="<?php echo get_stylesheet_directory_uri() . '/images/parking1.jpg' ?>" alt="">
                    <div class="section-plan__grid__item__content">
                        <div class="section-plan__grid__item__content__top color-white">
                            <p>252 м/м</p>
                        </div>
                        <div class="section-plan__grid__item__content__bottom color-white">
                            <p>Наземная парковка</p>
                        </div>
                    </div>
                </li>
                <li class="section-plan__grid__item border-black">
                <img class="section-plan__grid__item__img rentpic03" src="<?php echo get_stylesheet_directory_uri() . '/images/parking.jpg' ?>" alt="">
                    <div class="section-plan__grid__item__content">
                        <div class="section-plan__grid__item__content__top color-white">
                            <p>184 м/м</p>
                        </div>
                        <div class="section-plan__grid__item__content__bottom color-white">
                            <p>Подземный паркинг</p>
                        </div>
                    </div>
                </li>
           
            <li class="section-rent__grid__item">
                <img class="section-rent__grid__item__img rentpic03" src="<?php echo get_stylesheet_directory_uri() . '/images/rentpic02.jpg' ?>" alt="">
                <div class="section-rent__grid__item__content">
                    <div class="section-rent__grid__item__content__top">
                        <p>180 000+</p>
                    </div>
                    <div class="section-rent__grid__item__content__bottom ">
                        <p>человек — в зоне ближайших ЖК</p>
                    </div>
                </div>
            </li>
            <li class="section-rent__grid__item bg-white border-black">
                <div class="section-rent__grid__item__content">
                    <div class="section-rent__grid__item__content__top color-white">
                        <p class="color-beige">850 000+</p>
                    </div>
                    <div class="section-rent__grid__item__content__bottom">
                        <p>человек в ближайшейторговой зоне</p>
                    </div>
                </div>
            </li>
        </ul>

        <div class="section-rent__causes">
            <p class="section-rent__desc">
                И ещё несколько причин разместить магазин или шоу-рум у нас
            </p>

            <ul class="section-rent__causes__list">
                <li class="section-rent__causes__list__item">
                    <div class="causes-list__content">
                        <div class="section-rent__causes__list__item__head">
                            <h4>Доступность</h4>
                            <div class="item-num">
                                <p>01</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Отличная транспортная<br>
                                доступность центра</p>
                        </div>
                    </div>
                </li>
                <li class="section-rent__causes__list__item">
                    <div class="causes-list__content">
                        <div class="section-rent__causes__list__item__head">
                            <h4>Расположение</h4>
                            <div class="item-num">
                                <p>02</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Расположение в зоне интенсивной<br>жилой застройки</p>
                        </div>
                    </div>
                </li>
                <li class="section-rent__causes__list__item">
                    <div class="causes-list__content">
                        <div class="section-rent__causes__list__item__head">
                            <h4>Соседство</h4>
                            <div class="item-num">
                                <p>03</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Удачное соседство с&nbsp;гипермаркетами «Лента» и&nbsp;«Leroy&nbsp;Merlin»</p>
                        </div>
                    </div>
                </li>
                <li class="section-rent__causes__list__item">
                    <div class="causes-list__content">
                        <div class="section-rent__causes__list__item__head">
                            <h4>Зонирование</h4>
                            <div class="item-num">
                                <p>04</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Продуманное зонирование для&nbsp;удобства арендаторов&nbsp;и&nbsp;навигации посетителей</p>
                        </div>
                    </div>
                </li>
                <li class="section-rent__causes__list__item">
                    <div class="causes-list__content">
                        <div class="section-rent__causes__list__item__head">
                            <h4>Охрана</h4>
                            <div class="item-num">
                                <p>05</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Круглосуточная охрана<br>
                                с&nbsp;системой видеонаблюдения</p>
                        </div>
                    </div>
                </li>
                <li class="section-rent__causes__list__item">
                    <div class="causes-list__content">
                        <div class="section-rent__causes__list__item__head">
                            <h4>Удобство</h4>
                            <div class="item-num">
                                <p>06</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Подъезды для транспорта, грузовые подъемники<bt>и&nbsp;помещения для&nbsp;разгрузки мебели</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="section-rent__causes__form-block">
        <div class="container">
            <h2>Хотите арендовать помещение?</h2>
            <p class="form-block__description">
            Оставьте заявку — и мы свяжемся с вами для обсуждения деталей
            </p>

            <?php if ($rent_contactform = carbon_get_theme_option('crb_cf_rent' )){
                echo do_shortcode(" $rent_contactform "); 
            }?>
            <?php //echo do_shortcode('[contact-form-7 id="f53577e" title="Untitled"]')?>
        </div>
    </div>

</section>

<?php get_footer() ?>