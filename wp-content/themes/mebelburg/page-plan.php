<?php

/**
 * Template name: Страница План участка
 */
get_header() ?>

<section class="page-section _page-plan" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title">
                <h2><span class="bold">План участка</span> ИВЦ&nbsp;«МÖБЕЛЬБУРГ»</h2>
            </div>

            <div class="page-section__description">
                <p>
                    Здесь точно найдётся то,<br>
                    что вам нужно
                </p>
            </div>

            <div class="page-section__scheme-links">
                <a class="scheme-link" href="<?php echo site_url('scheme') ?>">Схема центра</a>
                <a class="scheme-link active" href="<?php echo site_url('scheme/plan') ?>">План участка</a>
            </div>
        </div>

        <div class="page-section__content _page-scheme__content">
            <ul class="section-plan__grid">
                <li class="section-plan__grid__item">
                    <img class="section-plan__grid__item__img" src="/" alt="">
                    <div class="section-plan__grid__item__content bg-beige">
                        <div class="section-plan__grid__item__content__top color-white">
                            <p>30 236 м<sup>2</sup></p>
                        </div>
                        <div class="section-plan__grid__item__content__bottom color-white">
                            <p>общая площадь интерьерно-выставочного центра</p>
                        </div>
                    </div>
                </li>
                <li class="section-plan__grid__item">
                    <img class="section-plan__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/adv6.png' ?>" alt="">
                    <div class="section-plan__grid__item__content">
                        <div class="section-plan__grid__item__content__top color-white">
                            <p>17 000 м<sup>2</sup></p>
                        </div>
                        <div class="section-plan__grid__item__content__bottom color-white">
                            <p>площадь магазинов и&nbsp;экспозиций</p>
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
            </ul>

            <div class="plan-section__title">
                <h2>План земельного участка</h2>
            </div>

            <div class="swiper floors-slider">
                <!-- <div class="floors-slider__button-prev">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1L1 6L6 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 6H19" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div> -->
                <div class="floors-slider__wrapper">

                    <!-- 1 plan -->
                    <?php
                    if ($plan = carbon_get_post_meta(get_the_ID(), 'crb_plan_img')) {
                        //  foreach ($floors_slides as $floor_slide) {
                         $plan_slide_img_url = wp_get_attachment_image_url($plan, 'full');
                    ?>
                        <div class="swiper-slide floors-slider__slide">
                            <a href="<?php echo $plan_slide_img_url; ?>" data-fancybox data-src="<?php echo $plan_slide_img_url; ?>" class="floors-slider__slide__img">

                                <img class="floors-slider__img" src="<?php echo $plan_slide_img_url; ?>" alt="">

                            </a>

                            <div class="plan-description">
                                <div class="plan-description__text">
                                    <?php if ($plan_desc = carbon_get_post_meta(get_the_ID(), 'crb_plan_list_description')) {
                                    ?>
                                        <p class="plan-list__description">
                                            <?php echo $plan_desc ?>
                                        </p>
                                    <?php } ?>
                                </div>


                                <ul class="plan-slider__slide__number-list plan-list">

                                    <?php
                                    $plan_numbers =
                                        carbon_get_post_meta(get_the_ID(), 'crb_plan_list');
                                    foreach ($plan_numbers as $plan_number) {
                                        echo '<li><div class="number-list__num">' . $plan_number['crb_plan_list_number'] . '</div><span>' . $plan_number['crb_plan_list_desc'] . '</span></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <!-- </div> -->
                    <?php
                    }
                    //  }
                    ?>



                </div>
                <!-- <div class="floors-slider__button-next">
                                <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 1L19 6L14 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19 6H1" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div> -->

            </div>
        </div>
    </div>

</section>

<?php get_footer() ?>