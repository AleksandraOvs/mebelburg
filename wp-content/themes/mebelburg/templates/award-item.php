<li class="sale-block__item">
    <?php
    if (has_post_thumbnail()) {

        the_post_thumbnail();
    } else {
    ?>
        <img src=" <?php echo get_stylesheet_directory_uri() ?>/images/svg/placeholder.svg" alt="">
    <?php
    }
    ?>
    <a href="<?php the_permalink() ?>" class="sale-block__item__content">
        <div class="sale-block__item__content__head">

            <?php
            if ($award_detail = carbon_get_post_meta(get_the_ID(), 'crb_award_details')) {
            ?>
                <div class="award-detail">
                    <?php echo $award_detail ?>
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
        if ($award_detail2 = carbon_get_post_meta(get_the_ID(), 'crb_award_details1')) {
        ?>
            <div class="sale-block__item__content__bottom">
                <?php echo $award_detail2 ?>
            </div>

        <?php
        }
        ?>

        <!-- <div class="sale-block__item__content__bottom"><?php //the_excerpt() 
                                                            ?></div> -->
    </a>
</li>