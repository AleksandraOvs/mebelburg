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

            <form action="" method="POST" id="shops-filter"> 


                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                    'child_of' => 14
                ));
                ?>
                <?php if ($categories) :
                ?>
                    


                    
                    <input type="submit" value="all">
                    <?php
                    foreach ($categories as $category) {
                    ?>
                        
                        <a href="#" class="shops-cat" ><?php echo $category->name ?></a>
                    <?php
                    }

                    ?>

                   
                <?php endif; ?>
                <!-- <input type="hidden" name="action" value="filtershops"> -->
                
            </form>

            <?php

if ( have_posts() ) {
	?>
    <ul class="page-shops__list">
    <?php
	while ( have_posts() ) {
		the_post();
		?>
        <?php get_template_part('templates/shop-item'); ?>
        <?php
	}
	?>
    </ul>
    <?php
}
else {
	
}

wp_reset_postdata();

?>
            <div id="more-shops">
                <a href="#" data-paged="<?php echo $paged ?>" class="button">Смотреть еще</a>
            </div>

        </div>
    </div>
</section>

<?php get_footer() ?>