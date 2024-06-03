<?php

// inc script
add_action('wp_enqueue_scripts', 'ajax_filter_enqueue_scripts');
function ajax_filter_enqueue_scripts()
{
    wp_enqueue_script('ajax-load-posts', get_template_directory_uri() . '/js/load-posts.js', array('jquery'), null, false);

    wp_localize_script('ajax-load-posts', 'my_ajax_script', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
//  fn ajax hook
add_action('wp_ajax_nopriv_loadPostsFromCategory', 'loadPostsFromCategory');
add_action('wp_ajax_loadPostsFromCategory', 'loadPostsFromCategory');

/**
 *  Функция загрузки постов
 */
function loadPostsFromCategory()
{
    // параметры цикла
    $custom_query_args = array(
        'post_type' => 'shops',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $_POST['paged'],
    );

    if ($_POST['category_id']) {
        $custom_query_args['cat'] = $_POST['category_id'];
    }

    // цикл
    $custom_query = new WP_Query($custom_query_args);

    $response = '';
    $max_pages = $custom_query->max_num_pages;

    if ($custom_query->have_posts()) {
        ob_start();
        while ($custom_query->have_posts()) : $custom_query->the_post();

            $response .= get_template_part('templates/shop-item');

        endwhile;
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $output = '<p style="padding: 20px;">По выбранным фильтрам ничего не найдено</p>';
    }


    $result = [
        'max' => $max_pages,
        'html' =>  $output,
    ];

    echo json_encode($result);
    exit;
}