<?php

/**
 * Template name: Страница Мероприятия
 */

?>

<?php get_header() ?>

<section class="page-section">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Загруженные чеки</h2>
            </div>

            <div class="page-section__description">
                <p>
                    На этой странице публикуются чеки, добавленные пользователями
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
        $number = 10;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $offset = ($paged - 1) * $number;

        $users = get_users();

        $total_users = count($users);

        $query = get_users('&offset=' . $offset . '&number=' . $number);

        $total_pages = intval($total_users / $number) + 1;

        echo '<ul id="users">';
        foreach ($query as $q) { ?>

            <li class="user clearfix">
                <!-- Краткая информация о пользователе -->
                <ul class="user-data">
                    <li class="user-login">
                        <span>Логин:&nbsp;</span><?php echo get_the_author_meta('display_name', $q->ID); ?>
                    </li>
                    <li class="user-email">
                        <span>E-mail:&nbsp;</span><?php echo get_the_author_meta('user_email', $q->ID); ?>
                    </li>
                    <li class="user-register">
                        <span>Дата регистрации:&nbsp;</span><?php echo get_the_author_meta('user_registered', $q->ID); ?>
                    </li>
                    <?php $author_id = get_the_author_meta('id', $q->ID); ?>
                </ul>

                <ul class="user-posts">
                    <?php
                    $args = array(
                        'author' => $author_id,
                        'order'       => 'ASC',
                        'post_type'   => 'check',
                        'suppress_filters' => true,
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        setup_postdata($post); ?>
                      
                        <li class="post-block__item">
                        <?php if ($thumb_url_full = get_the_post_thumbnail_url( $post->post_id, 'full' )){
                             $thumb_url_medium = get_the_post_thumbnail_url( $post->post_id, 'medium' ) ?>
                        <a class="check-image-link" data-fancybox="gallery" href="<?php echo $thumb_url_full ?>">
                            <img src="<?php echo $thumb_url_medium ?>" alt="">
                        </a>
                        <?php
                        }else {
                            echo '<img src="'. get_stylesheet_directory_uri().'/images/svg/placeholder.svg" alt="">';
                        }
                        ?>

                        <div class="post-check-content">
                            <h4><?php the_title() ?></h4>
                            <?php the_date( 'Y-m-d', '<p>', '</p>' ); ?>
                        </div>

                        
                       
                        </li>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>

            </li>
        <?php }
        echo '</ul>';
        ?>
    </div>






    </div>
</section>

<?php get_footer() ?>