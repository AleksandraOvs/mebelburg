<?php
$shops_query = new WP_Query(array(
    'post_type' => 'shops',
    'order' => 'ASC',
    'posts_per_page' => 15
    //'cat' => '3',
    //'posts_per_page' => 2,
));

if ($shops_query->have_posts()) {
?>
    <ul class="shops-list">
        <?php
        while ($shops_query->have_posts()) : $shops_query->the_post();


        ?>
            <li class="shops-list__item">
                <?php
                //if ($shop_img = carbon_get_post_meta(get_the_ID(), 'crb_shop_item')) {
                    $shop_img = carbon_get_post_meta(get_the_ID(), 'crb_shop_item');
                    $shop_img_id = wp_get_attachment_image_url($shop_img, 'full');
                    //print_r ($shop_img_id = wp_get_attachment_image_url($shop_img, 'full'));
                    echo '<img class="logo__img" src="' .  $shop_img_id  . '" alt="">';
                    //the_post_thumbnail('medium');
                //} else {
                    //echo '<img src="' . get_stylesheet_directory_uri() . '/images/svg/placeholder.svg" />';
                //}
                ?>
            </li>

        <?php
        endwhile;
        ?>
    </ul>
<?php
    wp_reset_postdata();
}
?>

