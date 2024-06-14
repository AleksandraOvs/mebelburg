<li class="food-block__list__item">
    <div class="container">
    <div class="food-block__logo">
        <?php
        $food_logo = carbon_get_post_meta(get_the_ID(), 'crb_food_logo');
        $food_logo_id = wp_get_attachment_image_url($food_logo, 'full');
        if ($food_logo) {
        ?>
            <img src="<?php echo $food_logo_id ?>" alt="">
        <?php
        } else {
        ?>
            <img src="<?php echo get_stylesheet_directory_uri() ?>'/images/placeholder.svg'" alt="">
        <?php
        }
        ?>
    </div>

    <div class="food-block__title">
        <?php
        $food_title = carbon_get_post_meta(get_the_ID(), 'crb_food_title');
        $food_description = carbon_get_post_meta(get_the_ID(), 'crb_food_description');

        if ($food_title && $food_description) {
            echo '<h3 class="food-title">' . $food_title . '</h3>';

            echo '<p class="food-description">' . $food_description . '</p>';
        }
        ?>
    </div>

    <ul class="food-block__icons">
        <?php
        if ($food_icons = carbon_get_post_meta(get_the_ID(), 'crb_food_icons')) {
            foreach ($food_icons as $food_icon) {

                $food_icon_field = $food_icon['crb_food_icon'];
                $food_icon_title = $food_icon['crb_food_icon_title'];
                $food_icon_id = wp_get_attachment_image_url($food_icon_field, 'full');


        ?>
                <li class="food-block__icon__item">
                    <img src="<?php echo $food_icon_id ?>" alt="">
                    <p class="food-icon__title"><?php echo $food_icon_title ?></p>
                </li>
        <?php
            }
        }

        ?>
    </ul>

    <?php if ($food_shed = carbon_get_post_meta(get_the_ID(), 'crb_food_shed')) {
    ?>
        <p class="food-block__shedule">
            <?php echo $food_shed; ?>
        </p>
    <?php
    }
    ?>
    <?php if ($food_loc = carbon_get_post_meta(get_the_ID(), 'crb_food_location')) {
    ?>
        <p class="food-block__location">
            <?php echo $food_loc; ?>
        </p>
    <?php
    }
    ?>
    </div>
</li>