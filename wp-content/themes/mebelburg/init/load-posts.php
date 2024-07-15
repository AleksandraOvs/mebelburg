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
        'posts_per_page' => 3,
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


//  fn ajax hook

// add_action('wp_ajax_nopriv_loadmore', 'loadmore');
// add_action('wp_ajax_loadmore', 'loadmore');

// function loadmore(){

//     $paged = ! empty ($_POST['paged']) ? $_POST['paged'] :1;
//     $paged++;

//     $args = array(
//         'paged' => $paged,
//         'post_status' => 'publish',
//         'post_type' => 'sales',
//         'posts_per_page' => 3
//     );


//     query_posts($args);
    
//     while( have_posts() ): the_post();
//        get_template_part('templates/sale-item');
// endwhile;

//     // query_posts( array(
//     //     'paged' => $paged
//     // ));

//     // while( have_posts()) : the_post();
//     //     the_title();
//     // endwhile;


//     die;
// }

// //  fn ajax hook
// add_action('wp_ajax_nopriv_loadmore_posts', 'loadmore_posts');
// add_action('wp_ajax_loadmore_posts', 'loadmore_posts');

// function loadmore_posts(){

//     $paged = ! empty ($_POST['paged']) ? $_POST['paged'] :1;
//     $paged++;

//     $args = array(
//         'paged' => $paged,
//         'post_status' => 'publish',
//         'category_name' => 'news',
//         //'post_type' => 'post',
//         'posts_per_page' => 12
//     );


//     query_posts($args);
    
//     while( have_posts() ): the_post();
//        get_template_part('templates/post-item');
// endwhile;

//     // query_posts( array(
//     //     'paged' => $paged
//     // ));

//     // while( have_posts()) : the_post();
//     //     the_title();
//     // endwhile;


//     die;
// }



//  fn ajax hook
add_action('wp_ajax_nopriv_loadNews', 'loadNews');
add_action('wp_ajax_loadNews', 'loadNews');

function loadNews()
{
    // параметры цикла
    $news_query_args = array(
        //'post_type' => 'shops',
        'category_name' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $_POST['paged'],
    );

    // цикл
    $news_query = new WP_Query($news_query_args);

    $response_news = '';
    $max_news_pages = $news_query->max_num_pages;

    if ($news_query->have_posts()) {
        ob_start();
        while ($news_query->have_posts()) : $news_query->the_post();

            $response_news .= get_template_part('templates/post-item');

        endwhile;
        $output_news = ob_get_contents();
        ob_end_clean();
    } else {
        $output_news = '<p style="padding: 20px;">По выбранным фильтрам ничего не найдено</p>';
    }


    $result_news = [
        'max' => $max_news_pages,
        'html' =>  $output_news,
    ];

    echo json_encode($result_news);
    exit;
}


//  fn ajax hook
add_action('wp_ajax_nopriv_loadSales', 'loadSales');
add_action('wp_ajax_loadSales', 'loadSales');

function loadSales()
{
    // параметры цикла
    $sales_query_args = array(
        //'post_type' => 'shops',
        'category_name' => 'sales',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $_POST['paged'],
    );

    // цикл
    $sales_query = new WP_Query($sales_query_args);

    $response_sales = '';
    $max_sales_pages = $sales_query->max_num_pages;

    if ($sales_query->have_posts()) {
        ob_start();
        while ($sales_query->have_posts()) : $sales_query->the_post();

            $response_sales .= get_template_part('templates/sale-item');

        endwhile;
        $output_sales = ob_get_contents();
        ob_end_clean();
    } else {
        $output_sales = '<p style="padding: 20px;">По выбранным фильтрам ничего не найдено</p>';
    }


    $result_sales = [
        'max' => $max_sales_pages,
        'html' =>  $output_sales,
    ];

    echo json_encode($result_sales);
    exit;
}