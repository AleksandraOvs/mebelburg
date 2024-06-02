<?php
    $paged = get_query_var('paged') ? get_quey_var('paged') : 1;
    global $wp_query;
    $max_pages = $wp_query->max_num_pages;

    echo '<pre>';
    print_r($wp_query);
    //print_r($max_pages);

    //if ($paged < $max_pages)
?>
<?php
if ($postsRerPage < $max_pages){
    ?>
<div id="more-shops">
    <a href="#" class="button">Смотреть еще</a>
</div>
    <?php
}
