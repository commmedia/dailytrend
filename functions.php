<?php
/**
 * Theme Functions
 *
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 *
 *-----------------------------------------------------------------------------------*/
// 
// Table of Contents:
//
// 1. Supports sections
// 2. Setup register
// 3. Thumbnail sizes
// 4. Enqueue scripts and styles
// 5. ACF Page Options



// 1. Supports sections
// ==========================================================================

    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');


// 2. Setup register
// ==========================================================================
   
    function register_daily_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header menu' ),
            'footer-menu' => __( 'Footer' )
          )
        );
      }
      add_action( 'init', 'register_daily_menus' );

      
  add_action( 'widgets_init', 'theme_slug_widgets_init' );
  function theme_slug_widgets_init() {
      register_sidebar( array(
          'name' => __( 'Front 1', 'theme-slug' ),
          'id' => 'front-1',
          'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
          'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
      ));
  
      register_sidebar( array(
          'name' => __( 'Front 2', 'theme-slug' ),
          'id' => 'front-2',
          'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
          'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
      ));

      register_sidebar( array(
        'name' => __( 'Front 3', 'theme-slug' ),
        'id' => 'front-3',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
    ));
    
    register_sidebar( array(
      'name' => __( 'Front 4', 'theme-slug' ),
      'id' => 'front-4',
      'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',
  ));


  register_sidebar( array(
    'name' => __( 'Front 5', 'theme-slug' ),
    'id' => 'front-5',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title'  => '<h2 class="widgettitle">',
'after_title'   => '</h2>',
));

register_sidebar( array(
  'name' => __( 'Front 6', 'theme-slug' ),
  'id' => 'front-6',
  'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title'  => '<h2 class="widgettitle">',
'after_title'   => '</h2>',
));

register_sidebar( array(
  'name' => __( 'Front 7', 'theme-slug' ),
  'id' => 'front-7',
  'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title'  => '<h2 class="widgettitle">',
'after_title'   => '</h2>',
));


register_sidebar( array(
  'name' => __( 'Front 8', 'theme-slug' ),
  'id' => 'front-8',
  'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title'  => '<h2 class="widgettitle">',
'after_title'   => '</h2>',
));


register_sidebar( array(
  'name' => __( 'Front 9', 'theme-slug' ),
  'id' => 'front-9',
  'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title'  => '<h2 class="widgettitle">',
'after_title'   => '</h2>',
));


  }

// 3. Thumbnail sizes
// ==========================================================================

    add_filter('jpeg_quality', create_function('', 'return 60;'));

        add_image_size('trend_default', 1140, 570, true);
        add_image_size('trend_square', 600, 580, true);

// 4. Enqueue scripts and styles
// ==========================================================================

    add_action( 'wp_enqueue_scripts', 'altitude_enqueue_scripts_styles' );
    function altitude_enqueue_scripts_styles() {

        wp_enqueue_script( 'trend-global', get_stylesheet_directory_uri() . '/js/global.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
        wp_enqueue_style( 'trend-library', get_stylesheet_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'tend-typekit-font', 'https://use.typekit.net/tgg0hmb.css' );
    
    }

// 5. ACF Page Options
// ==========================================================================
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Trend Settings',
		'menu_title'	=> 'Trend Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
  ));
  
  	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Font',
		'menu_title'	=> 'Font',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
  ));
  

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social',
		'menu_title'	=> 'Social',
		'parent_slug'	=> 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Ads',
		'menu_title'	=> 'Ads',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// 5. ACF Page Options
// ==========================================================================