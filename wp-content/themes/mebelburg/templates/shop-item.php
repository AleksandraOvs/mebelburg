<li class="page-shops__list__item">
    <?php
    $shop_img = carbon_get_post_meta(get_the_ID(), 'crb_shop_item');
    $shop_img_id = wp_get_attachment_image_url($shop_img, 'full');

    echo '<div class="page-shops__list__item__logo"><img class="shop__logo" src="' .  $shop_img_id  . '" alt=""></div>';
    ?>

    <div class="page-shops__list__item__content">
        <?php
        if ($shop_name = carbon_get_post_meta(get_the_ID(), 'crb_shop_item_name')) {
        ?>

            <h4 class="psl__item__content__name"><?php echo $shop_name ?></h4>

        <?php
        }
        ?>

        <div class="psl__item__content__more">
            <div class="psl__item__content__more__cat">
                <?php
                $links = array_map(function ($category) {
                    return sprintf(
                        '<span class="shop__cat">%s</span>', // Шаблон вывода ссылки
                        //esc_url(get_category_link($category)), // Ссылка на рубрику
                        esc_html($category->name) // Название рубрики
                    );
                }, get_the_category());

                echo implode(', ', $links);

                ?>
            </div>


            <?php
        if ($shop_floor = carbon_get_post_meta(get_the_ID(), 'crb_shop_item_location')) {
        ?>
            <p class="psl__item__content__more__floor">
                <?php echo $shop_floor; ?>
            </p>
            <?php } ?>

        </div>


    </div>
</li>