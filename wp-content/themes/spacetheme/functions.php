<?php
/**
 * space_theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package space_theme
 */

if ( ! function_exists( 'space_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function space_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on space_theme, use a find and replace
	 * to change 'space_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'space_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'space_theme' ),
	) );
	register_nav_menus( array(
		'second' => esc_html__( 'Second', 'space_theme' ),
	) );



	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'space_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'space_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function space_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'space_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'space_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function space_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'space_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'space_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'space_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function space_theme_scripts() {

	wp_enqueue_style( 'space_theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sidebar', get_template_directory_uri() . '/js/sidebar.js', array(), '20171215', true );

	if(is_page('gallery')) {

    wp_enqueue_style( 'space_theme-gallery_css', get_template_directory_uri() . '/css/gallery.css', true );
    //wp_enqueue_script( 'space_theme-galery_one_page_scroll', get_template_directory_uri() . '/js/galery_one_page_scroll.js', array(), '20171215', true );
}

	wp_enqueue_script( 'space_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'space_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

if(is_front_page()) {

    //wp_enqueue_script( 'space_theme-one_page_main', get_template_directory_uri() . '/js/one_page_scroll.js', array(), '20171215', true );
}

if(is_page('wedding') || is_page('live') || is_single()) {

    //wp_enqueue_script( 'space_theme-wedding', get_template_directory_uri() . '/js/wedding_one_page_scroll.js', array(), '20171215', true );
    wp_enqueue_script( 'space_theme-leader', get_template_directory_uri() . '/js/leader.js', array(), '20171215', true );
}

if(is_page('biznes')) {

    //wp_enqueue_script( 'space_theme-biznes_one_page_scroll', get_template_directory_uri() . '/js/biznes_one_page_scroll.js', array(), '20171215', true );
    wp_enqueue_script( 'space_theme-biznes', get_template_directory_uri() . '/js/biznes.js', array(), '20171215', true );
}

if(is_page('image')) {

    //wp_enqueue_script( 'space_theme-image_one_page_scroll', get_template_directory_uri() . '/js/image_one_page_scroll.js', array(), '20171215', true );
    wp_enqueue_script( 'space_theme-image', get_template_directory_uri() . '/js/image.js', array(), '20171215', true );
}

if(is_page('dekor') || is_page('rent-of-ready-made-scenery')) {

    //wp_enqueue_script( 'space_theme-dekor_one_page_scroll', get_template_directory_uri() . '/js/dekor_one_page_scroll.js', array(), '20171215', true );
    wp_enqueue_script( 'space_theme-dekor', get_template_directory_uri() . '/js/dekor.js', array(), '20171215', true );
    wp_enqueue_script( 'space_theme-dekor-slider', get_template_directory_uri() . '/js/dekor-slider.js', array(), '20171215', true );
    
    wp_enqueue_style( 'space_theme-dekor-style', get_template_directory_uri() . '/css/dekor.css', true );

    wp_enqueue_script( 'space_theme-mix', 'https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js', array(), '20171215', true );
    wp_enqueue_script( 'space_theme-dekor-mix-js', get_template_directory_uri() . '/js/mix-js.js', array(), '20171215', true );
    
}


}
add_action( 'wp_enqueue_scripts', 'space_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//  add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
// wp_clear_scheduled_hook('wp_version_check');


function remove_version() {
return '';
}
add_filter('the_generator', 'remove_version');



if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
 function post_is_in_descendant_category( $cats, $_post = null ) {
 foreach ( (array) $cats as $cat ) {
 // get_term_children() accepts integer ID only
 $descendants = get_term_children( (int) $cat, 'category' );
 if ( $descendants && in_category( $descendants, $_post ) )
 return true;
 }
 return false;
 }
}

function my_category_sort($order, $args)
{
$argv = array(
		'orderby' => 'DESC'
		);
get_terms('category', $argv);
}


function my_change_order( $query ) {
  if(is_main_query() && !is_admin() && is_archive()) {
    $query->set( array(
        'orderby' => 'date',
        'order' , 'DESC'
        ) );

  }
  return $query;
}
add_filter( 'pre_get_posts' , 'my_change_order' );





remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}


add_action('customize_register', function($customizer){
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Мои настройки',
            'priority' => 11,
        )
    );

	$customizer->add_setting(
	    'example_textbox',
	    array('default' => '')
	);

	$customizer->add_setting(
	    'example_textbox2',
	    array('default' => '')
	);
	$customizer->add_setting(
	    'example_textbox3',
	    array('default' => '')
	);
	$customizer->add_setting(
	    'example_textbox4',
	    array('default' => '')
	);
	$customizer->add_setting(
	    'example_textbox5',
	    array('default' => '')
	);
	$customizer->add_setting(
	    'example_textbox6',
	    array('default' => '')
	);

 	$customizer->add_control(
    'example_textbox',
    array(
        'label' => 'Адрес',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);

	$customizer->add_control(
    'example_textbox2',
    array(
        'label' => 'Email',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);

	$customizer->add_control(
    'example_textbox3',
    array(
        'label' => 'Телефон',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);

	$customizer->add_control(
    'example_textbox4',
    array(
        'label' => 'Instagram',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
	$customizer->add_control(
    'example_textbox5',
    array(
        'label' => 'Vkontakte',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
	$customizer->add_control(
    'example_textbox6',
    array(
        'label' => 'Facebook',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);

});

// Добавил еще один див родительский над sub-menu, для стилей нужен

function wrap_only_submenu_in_div($menu_html, $args) {
    if (wp_is_mobile()) {
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $menu_html);

        $new_li = $dom->createElement('li');
        $new_li->setAttribute('class', 'menu-item menu-item-home');

        $a = $dom->createElement('a', 'Главная');
        $a->setAttribute('href', home_url('/'));
        $new_li->appendChild($a);

        $menu = $dom->getElementsByTagName('ul')->item(0);
        $first_item = $menu->getElementsByTagName('li')->item(0);

        if ($first_item) {
            $menu->insertBefore($new_li, $first_item);
        } else {
            $menu->appendChild($new_li);
        }

        $menu_html = $dom->saveHTML($dom->documentElement->childNodes[1]);
    }

    $dom = new DOMDocument();
    @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $menu_html);

    $sub_menus = $dom->getElementsByTagName('ul');
    foreach ($sub_menus as $ul) {
        if ($ul->getAttribute('class') === 'sub-menu') {
            $div = $dom->createElement('div');
            $div->setAttribute('class', 'parent-sub-menu');

            $ul->parentNode->replaceChild($div, $ul);
            $div->appendChild($ul);
        }
    }

    $menu_html = $dom->saveHTML($dom->documentElement->childNodes[1]);

    return $menu_html;
}

add_filter('wp_nav_menu', 'wrap_only_submenu_in_div', 10, 2);


// // Попытка экспорта изображений из папки и инсерт в поле галереи
// add_action('acf/init', function() {
//     $post_id = 35; // Замените на ваш пост ID
//     import_images_to_acf_repeater($post_id);
// });

// function import_images_to_acf_repeater($post_id) {
//     // Директория с изображениями
//     $directory = '/home/worker/Загрузки/свадьба/';
//     $images = scandir($directory);

//     // Ключи ACF
//     $repeater_field_key = 'декор_свадеб'; // Замените на ваш ключ повторителя
//     $sub_field_key = 'фото'; // Замените на ваш ключ подполей изображения

//     // Очистим повторитель, если нужно, перед добавлением
//     delete_field($repeater_field_key, $post_id);

//     // Фильтрация изображений
//     $valid_extensions = array('jpg', 'jpeg', 'png', 'gif');
//     foreach ($images as $image) {
//         $file_extension = pathinfo($image, PATHINFO_EXTENSION);
//         if (in_array(strtolower($file_extension), $valid_extensions)) {
//             // Загружаем изображение в медиабиблиотеку
//             $file_path = $directory . $image;
//             $upload_id = upload_image_to_wordpress($file_path);
            
//             if ($upload_id) {
//                 // Добавляем изображение в ACF-повторитель
//                 $value = array(
//                     $sub_field_key => $upload_id, // ID загруженного изображения
//                 );
//                 add_row($repeater_field_key, $value, $post_id); // ACF функция добавления строки в повторитель
//             }
//         }
//     }
// }

// // Функция для загрузки изображения в медиабиблиотеку
// function upload_image_to_wordpress($file_path) {
//     if (!file_exists($file_path)) {
//         return false;
//     }

//     $file_name = basename($file_path);
//     $upload_file = wp_upload_bits($file_name, null, file_get_contents($file_path));

//     if (!$upload_file['error']) {
//         $wp_filetype = wp_check_filetype($file_name, null);
//         $attachment = array(
//             'post_mime_type' => $wp_filetype['type'],
//             'post_title' => sanitize_file_name($file_name),
//             'post_content' => '',
//             'post_status' => 'inherit',
//         );

//         $attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
//         require_once(ABSPATH . 'wp-admin/includes/image.php');
//         $attach_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
//         wp_update_attachment_metadata($attachment_id, $attach_data);

//         return $attachment_id;
//     }

//     return false;
// }
