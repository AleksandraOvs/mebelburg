<?php
$args = array(
    'category_name' => 'awards',
    'posts_per_page' => 2,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
?>

    <section class="section-awds">
        <div class="container">
            <h2 class="section-awds__title">Наши награды</h2>
            <ul class="awds-block__list">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part('templates/award-item');
                }
                ?>
            </ul>
        </div>
    </section>

<?php  } ?>