<?php get_header() ?>

<section class="page-section _food-page">
    <div class="container">

        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Еда в&nbsp;«МÖБЕЛЬБУРГ»</h2>
            </div>

            <div class="page-section__description">
                <p>
                    Сделайте паузу в&nbsp;походе по&nbsp;магазинам и&nbsp;перекусите прямо на&nbsp;территории центра
                </p>
            </div>
        </div>
    </div>

    <div class="page-section__content">
            <?php

            if (have_posts()) {
            ?>
                <ul class="food-block__list">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <?php get_template_part('templates/food-item'); ?>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            } else {
                echo '<h2>Не нейдено</h2>'
            }

            wp_reset_postdata();

            ?>
            <?php //get_template_part('templates/loadmore') 
            ?>

        </div>
    </div>
</section>

<?php get_footer() ?>