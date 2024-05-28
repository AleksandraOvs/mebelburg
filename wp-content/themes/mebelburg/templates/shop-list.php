<?php 
$shops_logos = (carbon_get_post_meta(get_the_ID(), 'crb_shops_list'));
print_r($shops_logos);
// foreach ($shops_logos as $shop_logo){
//     $logo_img_url = wp_get_attachment_image_url($shop_logo['crb_shop_item'], 'full');
//     echo '<img src="'. $logo_img_url .'" alt="">';

// }
?>

<?php if ($shops_logos = carbon_get_theme_option('crb_shops_list')) {
?>
    <ul class="shops-list">
        <?php foreach ($shops_logos as $shop_logo) {
            $logo_img_url = wp_get_attachment_image_url($shop_logo['crb_shop_item'], 'full');
        ?>
        <li class="shops-list__item">
            <img src="<?php echo $logo_img_url ?>" alt="<?php $shop_logo['crb_shop_item_text'] ?>">
        </li>
        <?php
        }
        ?>

    </ul>

    <div class="button">Показать ещё</div>
<?php
}
?>