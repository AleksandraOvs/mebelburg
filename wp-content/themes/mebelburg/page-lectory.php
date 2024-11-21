<?php

/**
 * Template name: Лекторий и коворкинг
 */
?>

<?php get_header() ?>

<section class="page-section _page-lectory" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title">
                <h2><span class="bold">Лекторий</span> и коворкинг</h2>
            </div>

            <div class="page-section__description _lect-desc">
                <p>
                    Многофункциональное пространство с&nbsp;красивым современным интерьером. В&nbsp;коворкинге дизайнеры и&nbsp;архитекторы смогут работать над&nbsp;проектами для&nbsp;заказчиков, а&nbsp;лекторий призван выступать как просветительская и&nbsp;образовательная площадка.
                </p>

            </div>
        </div>


        <?php
        if ($fragments = carbon_get_post_meta(get_the_ID(), 'crb_text_fragments')) {
        ?>
            <div class="page-lectory__about">
                <?php
                $i = 0;
                foreach ($fragments as $fragment) {
                    $i++;
                ?>
                    <div class="page-lectory__about__col">
                        <?php if ($fr_head = $fragment['crb_text_fragment_head']) {
                            echo '<h3>' . $fr_head . '</h3>';
                        }
                        ?>
                        <?php if ($fr_text = $fragment['crb_text_fragment']) {
                            echo $fr_text;
                        }
                        ?>
                    </div>
                    <?php if ($i == 2) {

                        if ($lec_slides = carbon_get_post_meta(get_the_ID(), 'crb_lec_slides')) {
                    ?>
                            <div class="swiper page-lectory-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($lec_slides as $lec_slide) {
                                        $lec_slide_url = wp_get_attachment_image_url($lec_slide['crb_lec_image'], 'full');
                                    ?>
                                        <div class="swiper-slide lec-slider-slide">
                                            <img src="<?php echo $lec_slide_url ?>" alt="">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="lec-slider__button-prev"><svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L1 6L6 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 6H19" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="lec-slider__button-next">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 1L19 6L14 11" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 6H1" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>


                    <?php
                        }
                    }
                    ?>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>

        <?php if ($services = carbon_get_post_meta(get_the_ID(), 'crb_lec_services')) {
        ?>
            <div class="lectory-price">
                <?php
                    if ($lec_desc = carbon_get_post_meta(get_the_ID(),'crb_lec_services_description')){
                        echo '<div class="lectory-price__part__description">'.$lec_desc.'</div>';
                    }
                ?>
                <?php
                foreach ($services as $service) {
                ?>
                    <div class="lectory-price__part">
                        <h4 class="lectory-price-head"><?php echo $service['crb_lec_services_head'] ?></h4>
                        <?php
                        if ($service_list = $service['crb_lec_services_items']) {
                            foreach ($service_list as $service_item) {
                        ?>
                                <div class="lectory-price__part__col">
                                    <div class="lectory-price__name"><?php echo $service_item['crb_lec_services_name'] ?></div>

                                    <div class="lectory-price__price"><?php echo $service_item['crb_lec_services_price'] ?></div>
                                </div>

                                <?php
                                if ($description = $service_item['crb_lec_services_desc']) {
                                    echo '<div class="lectory-price__part__description">' . $description . '</div>';
                                }
                                ?>
                        <?php
                            }
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>

        <?php
        if ($contact_cards = carbon_get_post_meta(get_the_ID(), 'crb_lec_contacts')) {
        ?>
            <ul class="lectory-contacts">
                <?php
                foreach ($contact_cards as $contact) {
                ?>
                    <li class="lectory-contacts__item">
                        <?php
                        echo '<h4>' . $contact['crb_lec_contact_name'] . '</h4>';
                        if ($contact_link = $contact['crb_lec_contact_link']) {
                            echo '<a href="' . $contact_link . '">' . $contact['crb_lec_contact'] . '</a>';
                        } else {
                            echo '<span>' . $contact['crb_lec_contact'] . '</span>';
                        }
                        ?>
                        <?php
                        if ($contact['crb_lec_contact_desc']) {
                            echo '<p class="contacts-description">' . $contact['crb_lec_contact_desc'] . '</p>';
                        }
                        ?>

                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        }

        ?>



    </div>

    <?php
    if ($lect_contactform = carbon_get_post_meta(get_the_ID(), 'crb_cf_form_shortcode')) {
    ?>
        <div class="section-rent__causes__form-block section__form-block">
            <div class="container">
                <?php
                if ($heading = carbon_get_post_meta(get_the_ID(), 'crb_cf_form_heading')) {
                    echo '<h2>' . $heading . '</h2>';
                }
                ?>

                <?php
                if ($description = carbon_get_post_meta(get_the_ID(), 'crb_cf_form_description')) {
                    echo '<div class="form-block__description">';
                    echo $description;
                    echo '</div>';
                }
                ?>

                <?php echo do_shortcode(" $lect_contactform "); ?>
            </div>
        </div>
    <?php
    }
    ?>
</section>

<?php get_footer() ?>