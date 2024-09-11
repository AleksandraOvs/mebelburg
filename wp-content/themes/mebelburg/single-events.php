<?php get_header() ?>

<section class="page-section _single-template" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <a href="<?php echo site_url() ?>">Главная</a>
                    <span> / </span>
                    <a href="<?php echo site_url()?>/events">Мероприятия</a>
                    <span> / </span>
                    <?php the_title() ?>
                <?php //echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title _single-template__title">
                <h2><?php the_title() ?></h2>
                <p class="_single-template__time"><?php the_time('j.m.Y'); ?></p>
            </div>
        </div>
    </div>

    <div class="container _single-template__content">
        <?php the_content() ?>
    </div>


</section>

<?php get_footer() ?>