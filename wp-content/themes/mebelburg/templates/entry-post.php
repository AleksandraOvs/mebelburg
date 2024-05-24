   <div class="post_item">
                        <a class="post-item__img" href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('medium') ?>

<div class="post-header">
    <?php get_template_part('templates/tags') ?>
    <a href="<?php the_permalink() ?>" class="post-header__title"><?php the_title() ?></a>
    <div class="post-header__info">
    <?php the_time('j F Y в H:i'); ?>
    </div>
</div>
</a>
</div>
