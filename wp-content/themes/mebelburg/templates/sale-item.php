<li class="sale-block__item">
<?php
$sale_img = carbon_get_post_meta(get_the_ID(), 'crb_sale_img');
$sale_img_id = wp_get_attachment_image_url($sale_img, 'full');
    if ($sale_img){
        ?>
        <img src="<?php echo $sale_img_id ?>" alt="">
        <?php
    }else {
        ?>
        <img src=" <?php echo get_stylesheet_directory_uri()?>/images/svg/placeholder.svg" alt="">
        <?php
    }
?>
    <a href="<?php the_permalink() ?>" class="sale-block__item__content">
        <div class="sale-block__item__content__head">

                <?php 
                if ($sale_date = carbon_get_post_meta(get_the_ID(), 'crb_sale_date') ){
                    ?>
                    <div class="sale-block__item__content__head__date">
                        <?php echo $sale_date ?>
                    </div>
                    <?php
                }
                ?>
                &nbsp;
            
            <div class="item__link">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 8V1H6" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13 1L1 13" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </div>

        <?php 
                if ($sale_desc = carbon_get_post_meta(get_the_ID(), 'crb_sale_desc') ){
                    ?>
        <div class="sale-block__item__content__bottom"><?php echo $sale_desc ?></div>
        <?php } ?>
                </a>
</li>