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
                <h2><?php the_title() ?></h2>
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
                <img class="section-advertising__grid__item__img" src="/" alt="">
                <div class="section-advertising__grid__item__content bg-beige">
                    <div class="section-advertising__grid__item__content__top color-white">
                        <p>30 236 м<sup>2</sup></p>
                    </div>
                    <div class="section-advertising__grid__item__content__bottom color-white">
                        <p>общая площадь<br>
                            интерьерно-выставочного центра</p>
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
                        <p>площадь магазинов<br>
                            и экспозиций</p>
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
                        <p>человек — потенциальные посетители<br>
                            среди жителей ближайших ЖК</p>
                    </div>
                </div>
            </li>
            <li class="section-advertising__grid__item bg-white border-black">
                <div class="section-advertising__grid__item__content">
                    <div class="section-advertising__grid__item__content__top color-white">
                        <p class="color-beige">850 000+</p>
                    </div>
                    <div class="section-advertising__grid__item__content__bottom">
                        <p>человек — потенциальные посетители<br>
                            среди жителей ближайших ЖК</p>
                    </div>
                </div>
            </li>
        </ul>

        <div class="section-advertising__present">
            <p class="section-rent__desc">
            Скачайте презентацию, чтобы узнать все рекламные
            возможности на территории ИВЦ
            </p>
            <div class="section-advertising__present__download">
                <a href="/" class="button">Скачать презентацию</a>
            </div>
        </div>
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