<?php

/**
 * Template name: Страница Развлечения
 */
get_header() ?>

<section class="page-section _page-enter" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
        </div>

        <div class="page-section__content _enter">
            <h2 class="enter__title">
            Скоро <span>тут</span> появятся<br>развлечения
            </h2>

            <a href="<?php echo site_url() ?>" class="button">Вернуться на Главную</a>
        </div>
    </div>
</section>

<?php get_footer() ?>