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
                <a class="scheme-link active" href="<?php echo site_url('scheme') ?>">Схема центра</a>
                <a class="scheme-link" href="<?php echo site_url('plan') ?>">План участка</a>
            </div>
        </div>

        <div class="page-section__content _page-scheme__content">
            <ul class="section-advertising__grid">
                <li class="section-advertising__grid__item">
                    <img class="section-advertising__grid__item__img" src="/" alt="">
                    <div class="section-advertising__grid__item__content bg-beige">
                        <div class="section-advertising__grid__item__content__top color-white">
                            <p>30 236 м<sup>2</sup></p>
                        </div>
                        <div class="section-advertising__grid__item__content__bottom color-white">
                            <p>общая площадь интерьерно-выставочного центра</p>
                        </div>
                    </div>
                </li>
                <li class="section-advertising__grid__item">
                    <img class="section-advertising__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/advpic02.png' ?>" alt="">
                    <div class="section-advertising__grid__item__content">
                        <div class="section-advertising__grid__item__content__top color-white">
                            <p>17 000 м<sup>2</sup></p>
                        </div>
                        <div class="section-advertising__grid__item__content__bottom color-white">
                            <p>площадь магазинов и&nbsp;экспозиций</p>
                        </div>
                    </div>
                </li>
                <li class="section-advertising__grid__item">
                    <img class="section-advertising__grid__item__img rentpic03" src="<?php echo get_stylesheet_directory_uri() . '/images/advpic03.png' ?>" alt="">
                    <div class="section-advertising__grid__item__content">
                        <div class="section-advertising__grid__item__content__top">
                            <p>100 000+</p>
                        </div>
                        <div class="section-advertising__grid__item__content__bottom ">
                            <p>человек — потенциальные посетители среди жителей ближайших ЖК</p>
                        </div>
                    </div>
                </li>
                <li class="section-advertising__grid__item bg-white border-black">
                    <div class="section-advertising__grid__item__content">
                        <div class="section-advertising__grid__item__content__top color-white">
                            <p class="color-beige">850 000+</p>
                        </div>
                        <div class="section-advertising__grid__item__content__bottom">
                            <p>человек — потенциальные посетители среди жителей ближайших ЖК</p>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="plan-section__title">
                <h2>План земельного участка</h2>
            </div>

            <div class="swiper floors-slider">
                <div class="floors-slider__button-prev">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1L1 6L6 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 6H19" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-wrapper floors-slider__wrapper">

                    <!-- 1 plan -->
                    <?php
                    if ($plan1_slide = carbon_get_post_meta(get_the_ID(), 'crb_plan1_img')) {
                        //  foreach ($floors_slides as $floor_slide) {
                    ?>
                        <div class="swiper-slide floors-slider__slide">
                            <div class="floors-slider__slide__img">
                                <?php
                                $plan1_slide_img_url = wp_get_attachment_image_url($plan1_slide, 'full');
                                ?>

                                <img class="floors-slider__img" src="<?php echo $plan1_slide_img_url; ?>" alt="">
                            </div>

                            <div class="plan-description">
                            <div class="plan-description__text">
                            <?php if ($plan1_desc = carbon_get_post_meta(get_the_ID(), 'crb_plan1_list_description')) {
                                ?>
                                    <p class="plan-list__description">
                                        <?php echo $plan1_desc ?>
                                    </p>
                                <?php } ?>
                            </div>
                            

                            <ul class="plan-slider__slide__number-list plan-list">
                               
                                <?php
                                $plan1_slide_numbers =
                                    carbon_get_post_meta(get_the_ID(), 'crb_plan1_list');
                                foreach ($plan1_slide_numbers as $plan_first) {
                                    echo '<li><div class="number-list__num">' . $plan_first['crb_plan1_list_number'] . '</div><span>' . $plan_first['crb_plan1_list_desc'] . '</span></li>';
                                }
                                ?>
                            </ul>
                            </div>

                        </div>
                    <?php
                    }
                    //  }
                    ?>

                    <!-- 2 plan -->
                    <?php
                    if ($plan2_slide = carbon_get_post_meta(get_the_ID(), 'crb_plan2_img')) {
                        //  foreach ($floors_slides as $floor_slide) {
                    ?>
                        <div class="swiper-slide floors-slider__slide">
                            <div class="floors-slider__slide__img">
                                <?php
                                $plan2_slide_img_url = wp_get_attachment_image_url($plan2_slide, 'full');
                                ?>

                                <img class="floors-slider__img" src="<?php echo $plan2_slide_img_url; ?>" alt="">
                            </div>

                            <div class="plan-description">
                                <div class="plan-description__text">
                                    <?php if ($plan2_desc = carbon_get_post_meta(get_the_ID(), 'crb_plan2_list_description')) {
                                    ?>
                                        <p class="plan-list__description">
                                            <?php echo $plan2_desc ?>
                                    </p>
                                    <?php } ?>
                                </div>
                                <ul class="plan-slider__slide__number-list plan-list">
                                    <?php
                                    $plan2_slide_numbers = carbon_get_post_meta(get_the_ID(), 'crb_plan2_list');
                                    foreach ($plan2_slide_numbers as $plan_second) {
                                        echo '<li><div class="number-list__num">' . $plan_second['crb_plan2_list_number'] . '</div><span>' . $plan_second['crb_plan2_list_desc'] . '</span></li>';
                                    }
                                    ?>
                                </ul>
                            </div>



                        </div>
                    <?php
                    }
                    //  }
                    ?>

                    <!-- 3 plan -->
                    <?php
                    if ($plan3_slide = carbon_get_post_meta(get_the_ID(), 'crb_plan3_img')) {
                        //  foreach ($floors_slides as $floor_slide) {
                    ?>
                        <div class="swiper-slide floors-slider__slide">
                            <div class="floors-slider__slide__img">
                                <?php
                                $plan3_slide_img_url = wp_get_attachment_image_url($plan3_slide, 'full');
                                ?>

                                <img class="floors-slider__img" src="<?php echo $plan3_slide_img_url; ?>" alt="">
                            </div>

                            <div class="plan-description">
                                <div class="plan-description__text">
                                <?php if ($plan3_desc = carbon_get_post_meta(get_the_ID(), 'crb_plan3_list_description')) {
                                ?>
                                    <p class="plan-list__description">
                                        <?php echo $plan3_desc ?>
                                </p>
                                <?php } ?>
                                </div>
                            </div>

                            <ul class="plan-slider__slide__number-list plan-list">
                                
                                <?php
                                $plan3_slide_numbers = carbon_get_post_meta(get_the_ID(), 'crb_plan3_list');
                                foreach ($plan3_slide_numbers as $plan_third) {
                                    echo '<li><div class="number-list__num">' . $plan_third['crb_plan3_list_number'] . '</div><span>' . $plan_third['crb_plan3_list_desc'] . '</span></li>';
                                }
                                ?>
                            </ul>

                        </div>
                    <?php
                    }
                    //  }
                    ?>

                </div>
                <div class="floors-slider__button-next">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 1L19 6L14 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 6H1" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

            </div>
        </div>
    </div>

</section>

<?php get_footer() ?>