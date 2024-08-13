<?php

/**
 * Template name: интерактивная карта
 */
get_header() ?>

<section class="page-section _page-plan" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title">
                <h2><span class="bold">Интерактивная карта</h2>
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

        <div class="page-section__content _page-scheme__content _map">
            <div class="swiper floors-slider">
                <div class="floors-slider__button-prev">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1L1 6L6 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 6H19" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-wrapper floors-slider__wrapper">
                    <div class="swiper-slide floors-slider__slide">
                        <div class="floors-slider__slide__floor">
                            <p>1 этаж</p>
                        </div>
                        <div class="floors-slider__slide__floor__content">
                            <?php get_template_part('map/floor1') ?>
                            <ul class="floors-slider__slide__number-list areas-table" id="areas">
                                <?php
                                if ($shop_names = carbon_get_post_meta(get_the_ID(), 'crb_scheme1f_items')) {
                                    $i = 0;
                                    foreach ($shop_names as $shop_name) {
                                        $i++;

                                        if ($shop = $shop_name['crb_scheme1f_list_name']){
                                            echo '<li id="area' . $i . '" class="area-item">
        <input class="areas-input" type="checkbox"><span class="number-list__num">' . $shop_name['crb_scheme1f_list_number'] . '</span><span class="area-item__name">' . $shop . '</span></li>';
                                        }
                                    }
                                ?>
                                    </li>
                                <?php
                                }

                                ?>
                            </ul>
                        </div>
                    </div><!-- /end of slide -->
                </div>
            </div>
        </div>
    </div>

</section>

<?php get_footer() ?>