<section class="hero-block">
    <div class="container">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper hero-slider__wrapper">
                <div class="hero-slider__button-prev">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1L1 6L6 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 6H19" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
                <?php
                if ($hero_slides = carbon_get_theme_option('crb_hero_slider')) {
                    foreach ($hero_slides as $hero_slide) {
                ?>
                        <div class="swiper-slide hero-slider__slide">
                            <?php
                            $hero_slide_img_url = wp_get_attachment_image_url($hero_slide['crb_hero_slider_image'], 'full');
                            ?>

                            <img class="hero-slider__img" src="<?php echo $hero_slide_img_url; ?>" alt="">

                            <div class="hero-slider__slide__content">
                                <?php
                                if ($slide_header = $hero_slide['crb_hero_slider_header']) {
                                    echo $slide_header;
                                }
                                ?>

                                <?php
                                if ($slide_link = $hero_slide['crb_hero_slider_link_more']) {
                                    echo '<div class="hero-slider__slide__content__more"><a class="hero-slider__slide__content__more__link" href="'.$slide_link.'">Более подробно</a></div>';
                                }
                                ?>
                            </div>

                        </div>
                <?php
                    }
                }
                ?>
                <div class="hero-slider__button-next">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 1L19 6L14 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 6H1" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <ul class="sale-block">
            <li class="sale-block__item">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/001.jpg' ?> " alt="">
                <div class="sale-block__item__content">
                    <div class="sale-block__item__content__head">
                        <div class="sale-block__item__content__head__date">До 15 мая</div>
                        <div class="sale-block__item__content__head__link">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8V1H6" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 1L1 13" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                    <div class="sale-block__item__content__bottom">Уютная мебель по акции. Скидки до 50%</div>
                </div>
            </li>
            <li class="sale-block__item">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/002.jpg' ?> " alt="">
                <div class="sale-block__item__content">
                    <div class="sale-block__item__content__head">
                        <div class="sale-block__item__content__head__date">C 15 мая до 22 июня</div>
                        <div class="sale-block__item__content__head__link">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8V1H6" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 1L1 13" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                    <div class="sale-block__item__content__bottom">Уютная мебель по акции. Скидки до 50%</div>
                </div>
            </li>
        </ul>
        <a href="/" class="button">Все акции</a>
    </div>
</section>