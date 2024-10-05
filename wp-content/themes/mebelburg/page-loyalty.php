<?php

/**
 * Template name: Страница Программа лояльности
 */
get_header() ?>

<section class="page-section _page-loyalty" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title">
                <h2><span class="bold">Программа</span> лояльности от&nbsp;<span class="bold">«МÖБЕЛЬБУРГ»</span> и&nbsp;<span class="bold">партнёров</span></h2>
            </div>

            <div class="page-section__description _loyalty-desc">
                <p>
                    Ищем дизайнеров, декораторов и&nbsp;дизайн-студии, которым интересно развитие в&nbsp;своём деле и&nbsp;сотрудничество с&nbsp;нами
                </p>

                <a href="#form-loyalty" class="button">Участвовать</a>
            </div>
        </div>

        <ul class="section-loyalty__grid">
            <li class="section-loyalty__grid__item">
                <!-- <img class="section-loyalty__grid__item__img" src="/" alt=""> -->
                <div class="section-loyalty__grid__item__content bg-beige">
                    <div class="section-loyalty__grid__item__content__top color-white">
                        <p>Коворкинг</p>
                    </div>
                    <div class="section-loyalty__grid__item__content__bottom color-white">
                        Бесплатный коворкинг на&nbsp;территории ИВЦ
                    </div>
                </div>
            </li>
            <li class="section-loyalty__grid__item darker">
                <img class="section-loyalty__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/loyalty/01.jpg' ?>" alt="">
                <div class="section-loyalty__grid__item__content">
                    <div class="section-loyalty__grid__item__content__top color-white">
                        <p>Мастер-классы</p>
                    </div>
                    <div class="section-loyalty__grid__item__content__bottom color-white">
                        <p>Закрытые мастер-классы и экскурсии</p>
                    </div>
                </div>
            </li>

            <li class="section-loyalty__grid__item bg-white border-black">

                <div class="section-loyalty__grid__item__content">
                    <div class="section-loyalty__grid__item__content__top">
                        <p>Доступы</p>
                    </div>
                    <div class="section-loyalty__grid__item__content__bottom">
                        <p>Доступ к образцам и новым каталогам</p>
                    </div>
                </div>
            </li>

            <li class="section-loyalty__grid__item darker">
                <img class="section-loyalty__grid__item__img" src="<?php echo get_stylesheet_directory_uri() . '/images/loyalty/02.jpg' ?>" alt="">
                <div class="section-loyalty__grid__item__content">
                    <div class="section-loyalty__grid__item__content__top color-white">
                        <p>Связи</p>
                    </div>
                    <div class="section-loyalty__grid__item__content__bottom color-white">
                        <p>Новые профессиональные связи</p>
                    </div>
                </div>
            </li>

            <li class="section-loyalty__grid__item bg-purple">

                <div class="section-loyalty__grid__item__content">
                    <div class="section-loyalty__grid__item__content__top color-white">
                        <p>Лояльность</p>
                    </div>
                    <div class="section-loyalty__grid__item__content__bottom color-white">
                        <p>Розыгрыш приза</p>
                    </div>
                </div>
            </li>


        </ul>

        <div class="section-loyalty__partners">
            <h3 class="section-loyalty__heading">
                Специальные условия для дизайнеров от наших партнёров
            </h3>

            <?php
            if ($partners_logos = carbon_get_post_meta(get_the_ID(), 'crb_loyalty_partners')) {
            ?>
                <ul class="partners-logo__list">
                    <?php
                    foreach ($partners_logos as $partner_logo) {
                        $partner_logo_url = wp_get_attachment_image_url($partner_logo['crb_partner_logo'], 'full');
                    ?>
                        <li class="partners-logo__list__item">
                            <img src="<?php echo $partner_logo_url ?>" alt="">
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            }
            ?>
        </div>

        <div class="section-for-members">
            <div class="section-for-members__col">
                <h3>Что получают участники&nbsp;программы</h3>
            </div>
            <ul class="section-for-members__list">
                <li class="section-for-members__list__item">
                    <h4 class="for-members__heading">Бесплатный коворкинг</h4>
                    <p class="for-members__text">
                        Работайте сами и проводите встречи с клиентами — мы обеспечим вас всем необходимым. От доступа к интернету до образцов продукции наших партнёров.
                    </p>
                </li>
                <li class="section-for-members__list__item">
                    <h4 class="for-members__heading">Закрытые мероприятия</h4>
                    <p class="for-members__text">
                        Узнавайте первыми о новых коллекциях мебели и трендах в дизайне — участвуйте в экскурсиях, мастер-классах и лекциях от ведущих дизайнеров и представителей брендов.
                    </p>
                </li>
                <li class="section-for-members__list__item">
                    <h4 class="for-members__heading">Розыгрыш приза</h4>
                    <p class="for-members__text">
                        Будьте в числе активных участников программы лояльности и не упустите шанс выиграть профессиональный графический планшет — незаменимый гаджет для дизайнера.
                    </p>
                </li>
            </ul>
        </div>

        <div class="section-steps">
            <h3 class="section-loyalty__heading">
            Три шага ко всем привилегиям программы
        </h3>

            <ul class="section-steps__list">
                <li class="section-steps__list__item">
                    <div class="causes-list__content">
                        <div class="section-steps__head">
                            <h4>Доступность</h4>
                            <div class="item-num">
                                <p>01</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Оставьте заявку на&nbsp;сайте и&nbsp;ознакомьтесь с&nbsp;условиями программы лояльности</p>
                        </div>
                    </div>
                </li>
                <li class="section-steps__list__item">
                    <div class="causes-list__content">
                        <div class="section-steps__head">
                            <h4>Подтверждение</h4>
                            <div class="item-num">
                                <p>02</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Дождитесь звонка менеджера — он подтвердит ваше участие в&nbsp;программе</p>
                        </div>
                    </div>
                </li>
                <li class="section-steps__list__item">
                    <div class="causes-list__content">
                        <div class="section-steps__head">
                            <h4>Бонусы</h4>
                            <div class="item-num">
                                <p>03</p>
                            </div>
                        </div>
                        <div class="section-rent__causes__list__item__bottom">
                            <p>Безоговорочно пользуйтесь бонусами, которые мы&nbsp;приготовили для&nbsp;вас</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="section-rent__causes__form-block" id="form-loyalty">
        <div class="container">
            <h2>Хотите стать участником программы??</h2>
            <p class="form-block__description">
            Оставьте заявку на сайте, и&nbsp;наш менеджер свяжется с&nbsp;вами, чтобы уточнить детали и&nbsp;подтвердить участие
            </p>

            <?php echo do_shortcode('[theme-my-login]'); ?>
            <?php echo do_shortcode('[loginform] '); ?>
            <?php
            // if ($loyalty_contactform = carbon_get_post_meta(get_the_ID(), 'crb_cf_loyalty')) {
            //     echo do_shortcode(" $loyalty_contactform ");
            // }
            ?>
            <?php //echo do_shortcode('[contact-form-7 id="8b26afb" title="Форма (реклама)"]')
            ?>
        </div>
    </div>

</section>

<?php get_footer() ?>