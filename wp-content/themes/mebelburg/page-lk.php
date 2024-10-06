<?php

/**
 * Template name: wp-recall lk
 */

?>

<?php get_header() ?>

<div class="page-section _dashbord" style="padding-top: 150px;">
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
                } elseif (current_user_can('designer') || current_user_can('administrator')) {
                    ?>
                    <!-- <p class="user-greeting"><span>Привет,&nbsp;</span><?php //echo $user_identity; 
                                                                            ?>!</p> -->
                    <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'fordesigners',
                        'publish' => true
                    );

                    $query = new WP_Query($args);

                    // Цикл
                    if ($query->have_posts()) {
                    ?>
                        <section class="section-fordesigners">
                            <h3 class="section-title">
                                Сейчас вам доступны предложения и&nbsp;мероприятия
                            </h3>
                            <?php
                            echo '<ul class="post-block__list">';
                            while ($query->have_posts()) {
                                $query->the_post();
                            ?>
                                <?php //the_title() 
                                ?>
                                <?php //get_template_part('templates/post-item'); 
                                ?>
                                <li class="post-block__item">
                                    <?php

                                    ?>
                                    <div class="post-block__item__content">

                                        <div class="post__content">
                                            <a href="<?php the_permalink() ?>" class="post-thumbnail">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail();
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
                                            if (!has_excerpt()) {
                                                the_title();
                                            } else {
                                                the_excerpt();
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
                            echo '</ul></section>';
                        } else {
                            // Постов не найдено
                        }

                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();

                        ?>

                        <?php
                        if ($dashboard_promocode = carbon_get_post_meta(get_the_ID(), 'crb_dashbord_promocode')) {
                        ?>
                            <section class="section-promocode">
                                <h3 class="section-title _promocode">Ваш промокод
                                    на бесплатное посещение коворкинга </h3>

                                <div class="promocode-inner">
                                    <p><?php echo $dashboard_promocode ?></p>
                                </div>
                            </section>

                        <?php
                        }
                        ?>

                        <section class="section-steps">
                            <h3 class="section-title">
                                Участвуй в розыгрыше приза!
                    </h3>

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
                        </section>

                        <?php
                        if ($dashboard_contactform = carbon_get_post_meta(get_the_ID(), 'crb_dashbord_form')) {
                        ?>
                            <section class="section-dashboard__form">
                                <?php if ($dashboard_contactform_head = carbon_get_post_meta(get_the_ID(), 'crb_dashbord_form_head')) {
                                    echo  '<h3 class="section-title">' . $dashboard_contactform_head . '</h3>';
                                }
                                ?>

                                <?php if ($dashboard_contactform_desc = carbon_get_post_meta(get_the_ID(), 'crb_dashbord_form_desc')) {
                                    echo  '<p class="form-block__description">' . $dashboard_contactform_desc . '</p>';
                                }
                                ?>

                                <?php
                                echo do_shortcode(" $dashboard_contactform ");
                                ?>
                            </section>
                        <?php
                        }
                        ?>
                        <?php //echo do_shortcode('[contact-form-7 id="f896057" title="Contact form 1"]')
                        ?>
            </div>

            <!-- end of _dashboard-content -->
        <?php
                }
        ?>
        </div>

    </div>
</div>

<?php get_footer() ?>