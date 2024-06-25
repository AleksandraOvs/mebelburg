<?php
/**
 * Template name: Страница Новостей
 */

?>

<?php get_header() ?>

<section class="page-section">
    <div class="container">

        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2>Новости «МÖБЕЛЬБУРГ»</h2>
            </div>

            <div class="page-section__description">
                <p>
                Отчёты о прошедших мероприятиях, информация о важных событиях центра
                </p>
            </div>
        </div>
    </div>

    <div class="container-nopaddings">
        <div class="page-section__content">

            <div class="container">
 <?php
 
 $args = array(
	'posts_per_page' => 9,
	'cat' => 'news'
);

$query = new WP_Query( $args );

// Цикл
if ( $query->have_posts() ) {
	echo '<ul class="post-block__list">';
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
        <?php get_template_part('templates/post-item'); ?>
        <?php
	}
	echo '</ul>';
}
else {
	// Постов не найдено
}

// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();

?>
           <?php get_template_part('templates/loadmore') ?>
            
            </div>
            

           

        </div>
    </div>


    </div>
</section>

<?php get_footer() ?>