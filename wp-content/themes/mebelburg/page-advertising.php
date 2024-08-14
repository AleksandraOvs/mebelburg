<?php

/**
 * Template name: Страница Реклама
 */
get_header() ?>

<section class="page-section _page-adv" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Размещение рекламы на&nbsp;территории центра</h2>
            </div>

            <div class="page-section__description adv-description">
                <p>
                Если это актуально для нашей аудитории,
                мы с удовольствием расскажем ей о вашей компании                </p>
            </div>
        </div>

        <h5>Рекламные возможности</h5>

        <ul class="section-advertising__grid">
            <li class="section-advertising__grid__item">
                <img class="section-advertising__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/adv001.jpg' ?>" alt="">
                <div class="section-advertising__grid__item__content">
                    <div class="section-advertising__grid__item__content__top color-white">
                        <!-- <p>30 236 м<sup>2</sup></p> -->
                         <p>Статика</p>
                    </div>
                    <div class="section-advertising__grid__item__content__bottom color-white">
                        <p>Мольберты, подвесные флаги, путеводители по&nbsp;центру и&nbsp;другие разновидности рекламной&nbsp;продукции</p>
                    </div>
                </div>
            </li>
            <li class="section-advertising__grid__item">
                <img class="section-advertising__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/adv002.jpg' ?>" alt="">
                <div class="section-advertising__grid__item__content">
                    <div class="section-advertising__grid__item__content__top color-white">
                        <p>Медиа</p>
                    </div>
                    <div class="section-advertising__grid__item__content__bottom color-white">
                        <p>Аудиоролики в&nbsp;комплексе, динамичная и&nbsp;статичная реклама на&nbsp;навигационном экране</p>
                    </div>
                </div>
            </li>
            <li class="section-advertising__grid__item">
                <img class="section-advertising__grid__item__img rentpic03" src="<?php echo get_stylesheet_directory_uri() . '/images/advpic03.png' ?>" alt="">
                <div class="section-advertising__grid__item__content">
                    <div class="section-advertising__grid__item__content__top">
                        <p>Промо</p>
                    </div>
                    <div class="section-advertising__grid__item__content__bottom ">
                        <p>Размещение промостойки, консультации&nbsp;специалистов, демонстрация товаров, лифлетинг</p>
                    </div>
                </div>
            </li>
            <li class="section-advertising__grid__item border-black">
            <img class="section-advertising__grid__item__img rentpic03" src="<?php echo get_stylesheet_directory_uri() . '/images/adv003.jpg' ?>" alt="">
                <div class="section-advertising__grid__item__content">
                    <div class="section-advertising__grid__item__content__top">
                        <p>Брендирование</p>
                    </div>
                    <div class="section-advertising__grid__item__content__bottom">
                        <p>Размещение фирменных рекламных островков, брендирование&nbsp;эскалаторов, размещение рекламы в&nbsp;лифтах и&nbsp;другие варианты рекламы в&nbsp;комплексе</p>
                    </div>
                </div>
            </li>
        </ul>

        <?php if ($adv_file = carbon_get_theme_option('crb_advertising_file')){
            ?>
            <div class="section-advertising__present">
            <p class="section-rent__desc">
            Скачайте презентацию, чтобы узнать все рекламные
            возможности на территории ИВЦ
            </p>
            <div class="section-advertising__present__download">
            <?php printf('<a class="button" href="%s">Скачать&nbsp;презентацию</a>', $adv_file); ?>
            </div>
        </div>
            <?php
        }
        ?>

        
    </div>


    <div class="section-rent__causes__form-block">
        <div class="container">
            <h2>Хотите разместить рекламу?</h2>
            <p class="form-block__description">
            Оставьте заявку — и мы свяжемся с вами для обсуждения деталей
            </p>
            <?php if ($adv_contactform = carbon_get_theme_option('crb_cf_adv' )){
                echo do_shortcode(" $adv_contactform "); 
            }?>
            <?php //echo do_shortcode('[contact-form-7 id="8b26afb" title="Форма (реклама)"]')?>
        </div>
    </div>

</section>

<?php get_footer() ?>