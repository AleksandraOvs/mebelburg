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
                <h2>Предложения для дизайнеров</h2>
            </div>

            <!-- <div class="page-section__description _events-desc">
                <p>
                    Бесплатные консультации дизайнеров интерьера, полезные лекции, встречи с&nbsp;профессионалами и&nbsp;праздники по&nbsp;хорошим поводам
                </p>
            </div> -->
        </div>
    </div>

    <div class="container-nopaddings">
        <div class="page-section__content">

            <div class="container">
                <?php

                if (have_posts()) {
                ?>
                    <ul class="post-block__list">
                        <?php
                        while (have_posts()) {
                            the_post();
                        ?>
                            <?php get_template_part('templates/post-check'); ?>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                } else {
                ?>

                    <h2 class="enter__title_events">
                        Скоро <span>тут</span> появятся<br>мероприятия
                    </h2>

                <?php
                }

                wp_reset_postdata();

                ?>
                <?php //get_template_part('templates/loadmore') 
                ?>

            </div>




        </div>
    </div>


    </div>
</section>

<?php get_footer() ?>