<?php get_header() ?>

<section class="page-section">
    <div class="container">

        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Акции в&nbsp;магазинах центра</h2>
            </div>

            <div class="page-section__description">
                <p>
                    Новые коллекции, скидки и специальные предложения
                </p>
            </div>
        </div>
    </div>

    <div class="container-nopaddings">
        <div class="page-section__content">

            <div class="container">
 <?php

            if (have_posts()) {
            ?>
                <ul class="sale-block__list">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <?php get_template_part('templates/sale-item'); ?>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            } else {
            }

            wp_reset_postdata();

            ?>
           <?php //get_template_part('templates/loadmore') ?>
           <div id="more_sales">
                    <button class="button">Смотреть еще</button>
                </div>
            </div>
            

           

        </div>
    </div>


    </div>
</section>

<?php get_footer() ?>