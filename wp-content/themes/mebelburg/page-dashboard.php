<?php

/**
 * Template name: Dashboard
 */

?>

<?php get_header() ?>

<section class="page-section _dashbord" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2><?php the_title()
                    ?></h2>
            </div>

            <div class="page-section__content _dashboard-content">
                <?php the_content() ?>

                <?php if (current_user_can('wait_member')) {  ?>


                    <?php
                    if ($for_waiting_message = carbon_get_post_meta(get_the_ID(), 'crb_wait_member_message')) {
                        echo '<div class="page-section__description">
                        <p>' . $for_waiting_message . '</p>
                        </div>';
                    };
                } elseif (current_user_can('administrator')) {
                    //echo 'You are administrator';
                } elseif (current_user_can('designer')) {
                    ?>
                    <p class="user-greeting"><span>Привет,&nbsp;</span><?php echo $user_identity; ?>!</p>


                    <h3 class="section-title">
                        Сейчас вам доступны предложения и&nbsp;мероприятия
                    </h3>

                    <?php
                    if ($dashboard_events = carbon_get_post_meta(get_the_ID(), 'crb_dashbord_events')) {
                    ?>
                        <ul class="post-block__list">
                            <?php
                            foreach ($dashboard_events as $dashboard_event) {
                                $dashbord_event_img_url = wp_get_attachment_image_url($dashboard_event['crb_dashboard_event'], 'full');
                            ?>
                                <li class="post-block__item _dashboard-events">
                                    <?php

                                    ?>
                                    <div class="post-block__item__content">

                                        <div class="post__content">
                                            <a href="/" class="post-thumbnail">
                                                <?php
                                                if ($dashbord_event_img_url) {
                                                ?>
                                                    <img src="<?php echo $dashbord_event_img_url ?>" alt="">
                                                <?php
                                                } else {
                                                    echo '<img src="' . get_bloginfo("template_url") . '/images/svg/placeholder.svg" />';
                                                }
                                                ?>
                                                <div class="item__link">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13 8V1H6" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M13 1L1 13" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                        </div>

                                        <div class="post__content__title">
                                            <?php
                                            if ($dashboard_event['crb_dashbord_event_head']) {
                                            ?>
                                                <div class="post__content__title">
                                                    <?php echo $dashboard_event['crb_dashbord_event_head'] ?>
                                                </div>
                                            <?php
                                            }

                                            ?>

                                        </div>
                                        </a>

                                        <div class="post__time">
                                            <?php the_time('j.m.Y'); ?>
                                        </div>
                                    </div>
                                </li>
                            <?php

                            }
                            ?>
                        </ul>
                    <?php
                    }

                    ?>

                    <?php
                    if ($dashboard_promocode = carbon_get_post_meta(get_the_ID(), 'crb_dashbord_promocode')) {
                    ?>
                        <h3 class="section-title _promocode">Ваш промокод
                            на бесплатное посещение коворкинга </h3>

                        <div class="promocode-inner">
                            <p><?php echo $dashboard_promocode ?></p>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="section-title">
                        Участвуй в розыгрыше приза!
                    </div>

                    <ul class="section-steps__list">
                        <li class="section-steps__list__item">
                            <div class="causes-list__content">
                                <div class="section-steps__head">
                                    <h4>Приводи клиентов</h4>
                                    <div class="item-num">
                                        <p>01</p>
                                    </div>
                                </div>
                                <div class="section-rent__causes__list__item__bottom">
                                    <p>Каждая покупка твоих клиентов в&nbsp;нашем центре приближает тебя к&nbsp;победе</p>
                                </div>
                            </div>
                        </li>
                        <li class="section-steps__list__item">
                            <div class="causes-list__content">
                                <div class="section-steps__head">
                                    <h4>Регистрируй чеки</h4>
                                    <div class="item-num">
                                        <p>02</p>
                                    </div>
                                </div>
                                <div class="section-rent__causes__list__item__bottom">
                                    <p>Зарегистрируй чеки клиентов в&nbsp;специальной форме до&nbsp;31 декабря 2024&nbsp;года</p>
                                </div>
                            </div>
                        </li>
                        <li class="section-steps__list__item">
                            <div class="causes-list__content">
                                <div class="section-steps__head">
                                    <h4>Выигрывай</h4>
                                    <div class="item-num">
                                        <p>03</p>
                                    </div>
                                </div>
                                <div class="section-rent__causes__list__item__bottom">
                                    <p>Дождись подведения итогов и&nbsp;выиграй графический планшет</p>
                                </div>
                            </div>
                        </li>
                    </ul>






                    <?php //echo do_shortcode('[contact-form-7 id="f896057" title="Contact form 1"]')
                    ?>
            </div>

            <!-- end of _dashboard-content -->
        <?php
                }
        ?>
        </div>

    </div>
</section>

<?php get_footer() ?>