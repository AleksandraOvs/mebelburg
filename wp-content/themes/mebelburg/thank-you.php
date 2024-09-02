<?php
/*
    Template name: Страница спасибо
*/
?>
<?php get_header() ?>

<section class="page-section" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Спасибо!</h2>
            </div>

            <div class="page-section__content">
                <?php the_content() ?>
            </div>

         <?php 
            $back = $_SERVER['HTTP_REFERER'];
            echo '<a class="button" href=' . $back . '>Назад</a>';
         ?>

            
        </div>

    </div>
</section>

<?php get_footer() ?>