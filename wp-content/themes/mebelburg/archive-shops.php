<?php get_header() ?>

<section class="page-section">
    <div class="container">

        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Магазины и бренды</h2>
            </div>

            <div class="page-section__description">
                <p>
                    Все для вашего дома: мебель, отделочные материалы, товары для интерьера, освещение, бытовая техника, камины
                </p>
            </div>
        </div>

        <div class="page-section__content">

            <div class="shops-filter">

                <span class="shops-cat active">Все</span> 
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                    'child_of' => 4
                ));
                ?>
                <?php if ($categories) :
                ?>

                    <?php
                    foreach ($categories as $category) {
                    ?>
                        <span data-term-id="<?php echo $category->term_id; ?>" class="shops-cat"><?php echo $category->name ?></span>
                    <?php
                    }

                    ?>


                <?php endif; ?>
    

            </div>

            <?php

            if (have_posts()) {
            ?>
                <ul class="page-shops__list">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <?php get_template_part('templates/shop-item'); ?>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            } else {
            }

            wp_reset_postdata();

            ?>
            <div id="more-shops">
                <button class="button">Смотреть еще</button>
            </div>

        </div>
    </div>
</section>

<?php get_footer() ?>