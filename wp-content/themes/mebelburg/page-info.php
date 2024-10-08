<?php /**
 * Template name: Page info for waiting users
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
                <h2><?php the_title() ?></h2>
            </div>

            <div class="page-section__content">
                <?php the_content() ?>
            </div>

            
        </div>

    </div>
</section>

<?php get_footer() ?>