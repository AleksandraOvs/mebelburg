<?php

//require_once __DIR__ . '/init/walker.php' ;
require 'init/carbon-fields.php';

add_action ('wp_enqueue_scripts', 'wp_js_and_css');
    function wp_js_and_css(){
       // wp_enqueue_style ('gfonts', 'href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap"');
        wp_enqueue_style ('font-icons', get_stylesheet_directory_uri() . '/css/font-icons.css', array(), '1.0');
        wp_enqueue_style ('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), time());
        wp_enqueue_style ('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
        wp_enqueue_style ('main', get_stylesheet_directory_uri() . '/css/style.css', array(), time());
        wp_enqueue_style ('fonts', get_stylesheet_directory_uri() . '/css/fonts.css', array(), time());
        
        wp_deregister_script('jquery');
        wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.7.1.min.js', array(), null, true);
        wp_enqueue_script('slider-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js',array('jquery'), null, true);
        wp_enqueue_script ('swiper-scripts', get_stylesheet_directory_uri() . '/js/slider-scripts.js',array('jquery'), null, true);
        wp_enqueue_script ('js-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    };

add_action ('after_setup_theme', 'gut_styles');

function gut_styles(){
	add_theme_support('editor-styles');
	add_editor_style('css/style-gutenberg.css');
}

register_nav_menus(array(
    'head_menu' => 'Main menu'
));

add_theme_support('post-thumbnails');
add_image_size ('bigpic', 900, 747, true);
add_image_size ('mediumpic', 500,737, true);
add_image_size ('smallpic', 100, 75, true);

//displayed logo

function my_customize_register( $wp_customize ) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        //'height' => '48',
        'width' => '280',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(

        'section' => 'title_tagline',
        'label' => 'Логотип Header'

    )));
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип Footer'
    )));
}
add_action( 'customize_register', 'my_customize_register' );