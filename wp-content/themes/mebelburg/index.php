<?php get_header() ?>

<!-- Content -->

<section class="content-section">
    <div class="container">
        <?php if (is_search()) : ?>
            <div class="category-description">
                <h1>Результаты поиска по запросу: &laquo;<?php the_search_query() ?>&raquo;</h1>
            </div>
        <?php endif; ?>
        <?php if (have_posts()) : ?>
            <?php
            $count = 1;
            while (have_posts()) : the_post();

                if (is_sticky()) {
                    get_template_part('entry', 'large');
                } else {
                    if ($count == 1) {
                        echo '<div class="row items-grid">';
                    }
                    get_template_part('entry');
                    $count++;
                }

            //   if ($count == 1){
            //       get_template_part('entry', 'large');
            //       echo '<div class="row items-grid">';
            //   }else {
            //     get_template_part('entry');
            //   }

            //   $count++;

            endwhile;
            if ($count > 1) {
                echo '</div>';
            }
            ?>


            <?php
            echo paginate_links(array(
                'prev_next' => true,
                'prev_text' => __('<i class="icon arrow_carrot-left"></i>>'),
                'next_text' => __('<i class="icon arrow_carrot-right"></i>>'),
            ));
            ?>


        <?php else : ?>
            <p>По вашему запросу ничего не найдено</p>
        <?php endif; ?>
        <?php get_sidebar() ?>
    </div>
</section>



<?php get_footer() ?>