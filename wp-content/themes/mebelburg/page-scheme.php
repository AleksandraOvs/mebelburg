<?php

/**
 * Template name: Страница Схема центра
 */
get_header() ?>

<section class="page-section _page-scheme" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title">
                <h2><span class="bold">Схема центра</span> ИВЦ&nbsp;«МÖБЕЛЬБУРГ»</h2>
            </div>

            <div class="page-section__description">
                <p>
                    Здесь точно найдётся то,<br>
                    что вам нужно
                </p>
            </div>

            <div class="page-section__scheme-links">
                <a class="scheme-link active" href="<?php echo site_url('scheme') ?>">Схема центра</a>
                <a class="scheme-link" href="<?php echo site_url('scheme/plan') ?>">План участка</a>
            </div>
        </div>

        <div class="page-section__content _page-scheme__content">
            <div class="swiper floors-slider">
                <div class="floors-slider__button-prev">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1L1 6L6 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 6H19" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-wrapper floors-slider__wrapper">

                    <!-- 1 floor -->
                    <?php
                    if ($im_1floor = carbon_get_post_meta(get_the_ID(), 'crb_imagemap1_shortcode')) {
                    ?>

                        <div class="swiper-slide floors-slider__slide">
                            <div class="floors-slider__slide__floor">
                                <p>1 этаж</p>
                            </div>

                            <?php
                            $var1 = '[' . $im_1floor . ']';
                            echo do_shortcode($var1);
                            ?>

                            <ul class="floors-slider__slide__number-list">
                                <?php
                                $floor1_slide_numbers = carbon_get_post_meta(get_the_ID(), 'crb_scheme1f_list');
                                foreach ($floor1_slide_numbers as $number_first) {
                                    echo '<li><div class="number-list__num">' . $number_first['crb_scheme1f_list_number'] . '</div><span>' . $number_first['crb_scheme1f_list_desc'] . '</span></li>';
                                }
                                ?>
                            </ul>

                        </div>
                    <?php
                    }
                    //  }
                    ?>

                    <!-- 2 floor -->
                    <?php
                    if ($im_2floor = carbon_get_post_meta(get_the_ID(), 'crb_imagemap2_shortcode')) {
                    ?>
                        <div class="swiper-slide floors-slider__slide">

                            <div class="floors-slider__slide__floor">
                                <p>2 этаж</p>
                            </div>
                            <?php
                            $var2 = '[' . $im_2floor . ']';
                            echo do_shortcode($var2);
                            ?>

                            <ul class="floors-slider__slide__number-list">
                                <?php
                                $floor2_slide_numbers = carbon_get_post_meta(get_the_ID(), 'crb_scheme2f_list');
                                foreach ($floor2_slide_numbers as $number_second) {
                                    echo '<li><div class="number-list__num">' . $number_second['crb_scheme2f_list_number'] . '</div><span>' . $number_second['crb_scheme2f_list_desc'] . '</span></li>';
                                }
                                ?>
                            </ul>

                        </div>
                    <?php
                    }
                    ?>

                    <!-- 3 floor -->
                    <?php
                    if ($im_3floor = carbon_get_post_meta(get_the_ID(), 'crb_imagemap3_shortcode')) {
                    ?>
                        <div class="swiper-slide floors-slider__slide">

                            <div class="floors-slider__slide__floor">
                                <p>3 этаж</p>
                            </div>
                            <?php
                            $var3 = '[' . $im_3floor . ']';
                            echo do_shortcode($var3);
                            ?>

                            <ul class="floors-slider__slide__number-list">
                                <?php
                                $floor3_slide_numbers = carbon_get_post_meta(get_the_ID(), 'crb_scheme3f_list');
                                foreach ($floor3_slide_numbers as $number_third) {
                                    echo '<li><div class="number-list__num">' . $number_third['crb_scheme3f_list_number'] . '</div><span>' . $number_third['crb_scheme3f_list_desc'] . '</span></li>';
                                }
                                ?>
                            </ul>

                        </div>
                    <?php
                    }
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