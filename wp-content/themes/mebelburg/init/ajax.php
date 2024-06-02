<?php

add_action('wp_enqueue_scripts', 'ajax_enqueue');
function ajax_enqueue()
{
    wp_register_script('theme-ajax', get_stylesheet_directory_uri() . '/js/theme-ajax.js', array('jquery'), time(), true);
    wp_localize_script('theme-ajax',
    'themeajax',
    array(
        'ajax_url' => admin_url('admin-ajax.php')
    )
    );
    wp_enqueue_script('theme-ajax');
};

add_action('wp_ajax_filtershops', 'ajax_filter');
add_action('wp_ajax_nopriv_filtershops', 'ajax_filter');

function ajax_filter(){

 
}
