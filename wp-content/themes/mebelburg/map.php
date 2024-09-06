<?php

/**
 * Template name: интерактивная карта
 */
get_header() ?>

<section class="page-section _page-plan" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page__title">
                <h2><span class="bold">Интерактивная карта</h2>
            </div>

            <div class="page-section__description">
                <p>
                    Здесь точно найдётся то,<br>
                    что вам нужно
                </p>
            </div>

            <div class="page-section__scheme-links">
                <a class="scheme-link active" href="<?php echo site_url('scheme') ?>">Схема центра</a>
                <a class="scheme-link" href="<?php echo site_url('scheme/plan') ?>">План участка</a>
            </div>
        </div>

        <div id="image-map-pro"></div>
    </div>

</section>

<?php get_footer() ?>
