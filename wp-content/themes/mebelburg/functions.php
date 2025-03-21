<?php
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}
//require_once __DIR__ . '/init/walker.php' ;

add_action('wp_enqueue_scripts', 'wp_js_and_css');
function wp_js_and_css()
{
	// wp_enqueue_style ('gfonts', 'href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap"');
	wp_enqueue_style('font-icons', get_stylesheet_directory_uri() . '/css/font-icons.css', array(), '1.0');
	wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), time());
	//wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css', array(), time());
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/style.css', array(), time());
	wp_enqueue_style('loyalty_styles', get_stylesheet_directory_uri() . '/css/style-loyalty.css', array(), time());
	wp_enqueue_style('lectory_styles', get_stylesheet_directory_uri() . '/css/style-lectory.css', array(), time());
	wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/css/fonts.css', array(), time());
	wp_enqueue_style('fancy_styles', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css', array(), time());
	wp_enqueue_style('popups_styles', get_stylesheet_directory_uri() . '/css/popups.css', array(), time());
	wp_enqueue_style('account_styles', get_stylesheet_directory_uri() . '/css/account.css', array(), time());
	wp_enqueue_style('snow-styles', get_stylesheet_directory_uri() . '/css/podarok.css', array(), time());

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.7.1.min.js', array(), null, true);
	//wp_enqueue_script('slider-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('slider-scripts', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('swiper-scripts', get_stylesheet_directory_uri() . '/js/slider-scripts.js', array('jquery'), null, true);
	wp_enqueue_script('js-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('fancy_scripts', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/js/jquery-ui.js', array('jquery'), null, true);
	wp_enqueue_script('popups-script', get_stylesheet_directory_uri() . '/js/popups.js', array('jquery'), null, true);
	
	//if (is_page('imap')){
	//wp_enqueue_script('map_scripts', get_stylesheet_directory_uri() . '/map/map-js.js', array('jquery'), null, true);
	//wp_enqueue_style('map_styles', get_stylesheet_directory_uri() . '/map/map-styles.css', array(), time());
	wp_enqueue_script('image_pro_scripts', get_stylesheet_directory_uri() . '/js/image-map-pro.min.js', array('jquery'), null, true);
	//}
	
};

require 'init/carbon-fields.php';
//require 'init/login.php';
require 'init/breadcrumbs.php';
require 'init/pagination.php';
require 'init/roles.php';
require 'contacts-report/contact-form-cfdb-7.php';



add_action('after_setup_theme', 'gut_styles');

function gut_styles()
{
	add_theme_support('editor-styles');
	add_editor_style('css/style-gutenberg.css');
}


register_nav_menus(array(
	'head_menu' => 'Main menu',
	'items_wrap'      => '%3$s'
));

add_theme_support('post-thumbnails');
add_image_size('bigpic', 900, 747, true);
add_image_size('mediumpic', 780, 540, true);
add_image_size('smallpic', 100, 75, true);

//displayed logo

function my_customize_register($wp_customize)
{
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
add_action('customize_register', 'my_customize_register');

add_action('init', 'register_post_types');

function register_post_types()
{

	register_post_type('shops', [
		'label'  => null,
		'labels' => [
			'name'               => 'Магазины', // основное название для типа записи
			'singular_name'      => 'Магазины', // название для одной записи этого типа
			'add_new'            => 'Добавить Магазин', // для добавления новой записи
			'add_new_item'       => 'Добавление Магазина', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Магазина', // для редактирования типа записи
			'new_item'           => 'Новый Магазин', // текст новой записи
			'view_item'          => 'Смотреть магазин', // для просмотра записи этого типа.
			'search_items'       => 'Искать магазин', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Магазины', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-cart',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => ['title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['category'],
		'has_archive'         => true,
		'rewrite'             => array(
			'slug'	=> 'shops',
		),
		'query_var'           => 'shops',
	]);

	register_post_type('food', [
		'label'  => null,
		'labels' => [
			'name'               => 'Еда', // основное название для типа записи
			'singular_name'      => 'Организация', // название для одной записи этого типа
			'add_new'            => 'Добавить Организацию', // для добавления новой записи
			'add_new_item'       => 'Добавление Организации', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Организации', // для редактирования типа записи
			'new_item'           => 'Новая Организация', // текст новой записи
			'view_item'          => 'Смотреть Организацию', // для просмотра записи этого типа.
			'search_items'       => 'Искать Организацию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Еда', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-carrot',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => ['title'], // ['title', 'thumbnail']'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['category'],
		'has_archive'         => true,
		'rewrite'             => array(
			'slug'	=> 'food',
		),
		'query_var'           => 'food',
	]);

	register_post_type('events', [
		'label'  => null,
		'labels' => [
			'name'               => 'Мероприятия', // основное название для типа записи
			'singular_name'      => 'Мероприятие', // название для одной записи этого типа
			'add_new'            => 'Добавить Мероприятие', // для добавления новой записи
			'add_new_item'       => 'Добавление Мероприятия', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Мероприятия', // для редактирования типа записи
			'new_item'           => 'Новое мероприятие', // текст новой записи
			'view_item'          => 'Смотреть Мероприятие', // для просмотра записи этого типа.
			'search_items'       => 'Искать Мероприятие', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Мероприятия (статьи)', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-format-aside',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => ['title', 'thumbnail', 'editor'], // ['title', 'thumbnail']'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		//'taxonomies'          => ['category'],
		'has_archive'         => true,
		'rewrite'             => array(
			'slug'	=> 'events',
		),
		'query_var'           => 'events',
	]);

	register_post_type('check', [
		'label'  => null,
		'labels' => [
			'name'               => 'Чеки', // основное название для типа записи
			'singular_name'      => 'Чек', // название для одной записи этого типа
			'add_new'            => 'Добавить Чек', // для добавления новой записи
			'add_new_item'       => 'Добавление Чека', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Чека', // для редактирования типа записи
			'new_item'           => 'Новый чек', // текст новой записи
			'view_item'          => 'Смотреть чек', // для просмотра записи этого типа.
			'search_items'       => 'Искать чек', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Чеки от дизайнеров', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-list-view',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => ['title', 'thumbnail', 'editor'], // ['title', 'thumbnail']'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => null,
		'has_archive'         => true,
		'rewrite'             => array(
			'slug'	=> 'check',
		),
		'query_var'           => 'check',
	]);

	register_post_type('fordesigners', [
		'label'  => null,
		'labels' => [
			'name'               => 'Предложения для дизайнеров', // основное название для типа записи
			'singular_name'      => 'Предложение', // название для одной записи этого типа
			'add_new'            => 'Добавить Предложение', // для добавления новой записи
			'add_new_item'       => 'Добавление Предложения', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Предложения', // для редактирования типа записи
			'new_item'           => 'Новое Предложение', // текст новой записи
			'view_item'          => 'Смотреть Предложение', // для просмотра записи этого типа.
			'search_items'       => 'Искать Предложение', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Предложения для дизайнеров', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => false, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-bell',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => ['title', 'thumbnail', 'editor'], // ['title', 'thumbnail']'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => null,
		'has_archive'         => true,
		'rewrite'             => array(
			'slug'	=> 'fordesigners',
		),
		'query_var'           => 'fordesigners',
	]);
}

add_action('widgets_init', 'register_widgets');
function register_widgets()
{
	register_sidebar(array(
		'name'          => 'footer-widget',
		'id'            => "footer-widget",
		'description'   => 'Нижняя панель футера',
		'class'         => 'footer__inner__bottom__widget',
		'before_widget' => '',
		'after_widget'  => '',
	));
}

// add_action( 'pre_get_posts', 'true_modify_posts_per_page', 25 );

// function true_modify_posts_per_page( $query ) {

// 	$query->set( 'posts_per_page', 5 ); // отображает 5 записей на странице
// 	// но мы можем изменять и многие другие параметры основного цикла

// }

//изменение количества выводимых записей для произвольного типа записи shops
function modify_main_query($query)
{
	if (is_admin() || ! $query->is_main_query()) {
		return;
	}

	if (is_post_type_archive('shops')) {
		$query->set('posts_per_page', 15);
		return;
	}

	if (is_post_type_archive('sales')) {
		$query->set('posts_per_page', 6);
		return;
	}
}
add_action('pre_get_posts', 'modify_main_query');


/**
 * Подгрузка постов ajax
 */
require get_template_directory() . '/init/load-posts.php';


// Вывод колонок в списке записей
// function remove_post_columns($posts_columns) {
// 	$posts_columns = array(
// 		"cb" => "",
// 		"title" => "Заголовок",
// 		"cat" => 'Рубрика',
// 		"author" => "Автор",
// 		"date" => "Дата",
// 	);
// 	return $posts_columns;
// }
// add_filter('manage_posts_columns', 'remove_post_columns');

function getUserRegDate() {
	$user = get_userdata(get_current_user_id());
	$user_reg = $user->get('user_registered');
	$datetime = new DateTime($user_reg);
	$formatter = new IntlDateFormatter(
		'ru_RU',
		IntlDateFormatter::LONG,
		IntlDateFormatter::LONG
	);
	$formatter->setPattern('d MMMM, yyyy');
	echo $formatter->format($datetime);
	}

	function new_excerpt_more( $more ) {
		return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');