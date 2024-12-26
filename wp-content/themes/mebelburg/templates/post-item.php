<li class="post-block__item">
    <?php

    ?>
    <div class="post-block__item__content">

        <div class="post__content">
            <a href="<?php the_permalink() ?>" class="post-thumbnail">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } else {
                    echo '<img src="' . get_bloginfo("template_url") . '/images/svg/placeholder.svg" />';
                }
                ?>
                <div class="item__link">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 8V1H6" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13 1L1 13" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
            </a>
        </div>

        <div class="post__content__title">
            <?php
            if (!has_excerpt()) {
                the_title();
            } else {
                the_excerpt();
            }
            ?>

        </div>
        

        <div class="post__time">
            <?php the_time('j.m.Y'); ?>
        </div>



        <!-- <div class="post-block__item__content__head">

            
        </div> -->

        <?php
        //if ($sale_desc = carbon_get_post_meta(get_the_ID(), 'crb_sale_desc')) {
        ?>
            <!-- <div class="sale-block__item__content__bottom"><?php //echo $sale_desc ?></div> -->
        <?php //} ?>
    </div>
</li>