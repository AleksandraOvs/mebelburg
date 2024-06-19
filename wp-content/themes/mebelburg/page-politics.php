<?php
/*Template name: Page politics
*
*/
?>

<?php get_header() ?>

<section class="page-section" style="padding-top: 150px; padding-bottom: 0;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
        </div>
        <div class="page-content">
            <div class="page__title">
                <h2><span class="bold">Политика в отношении обработки</span> персональных данных</h2>
            </div>
            <div class="page-content__fixed">
                <div class="download-politics">
                    <div class="download-politics__img">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/svg/pdf.svg' ?>" alt="Скачать файл политики">
                    </div>
                    <?php
                    $file = carbon_get_theme_option('crb_politics_file');
                    if ($file) {
                        printf('<a href="%s">Скачать<br>PDF файл</a>', $file);
                    }
                    ?>
                </div>
                <?php the_content() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>