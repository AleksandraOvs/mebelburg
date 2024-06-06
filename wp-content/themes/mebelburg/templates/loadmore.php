<?php
global $wp_query;
    $paged = get_query_var('paged');
    $paged++;

    //global $wp_query;
    $max_pages = $wp_query->max_num_pages;
    //echo '<pre>';
    //print_r($paged );

// ?>
<?php
//if ($paged < $max_pages){
    ?>
<div id="load-posts">
    <a data-max_pages="<?php echo $max_pages ?>" data-paged="<?php echo $paged ?>" href="#" class="button">Смотреть еще</a>
</div>
    <?php
//}
