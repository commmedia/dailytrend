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
  'name' => __( 'Sidebar 1', 'theme-slug' ),
  'id' => 'sidebar-1',
  'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title'  => '<h2 class="widgettitle">',
'after_title'   => '</h2>',
));


register_sidebar( array(
  'name' => __( 'After Entry', 'theme-slug' ),
  'id' => 'after-entry',
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
        add_image_size('trend_horizontal', 570, 235, true);
        add_image_size('trend_square', 400, 380, true);
        
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

// 6. Shortcoder
// ==========================================================================

// 6.1 herobanner
// =======================================================

function trend_posts_shortcode_hero($atts, $content = NULL)
{
    $atts = shortcode_atts(
        [
            'orderby' => 'date',
            'posts_per_page' => '4'
        ], $atts, 'recent-posts' );
     
    $query = new WP_Query( $atts );
 
    $output = '<ul class="feed hero">';
 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <li>
                <div class="card">
                    <div class="card-img">
                    
                    <a href="'. get_permalink() .'" ><img src="'. get_the_post_thumbnail_url( $id, 'trend_horizontal' ) .'" /></a>
                    </div>
                    <div class="card-content">
                    <h4>
                    <a href="'. get_permalink() .'" >' . get_the_title() . '</a>
                    </h4>
                    <p> Por '. get_the_author().' </p>
                    </div>
                </div>
            </li> ';
 
    endwhile;
 
    wp_reset_query();
 
    return $output . '</ul>';
}
add_shortcode('herobanner', 'trend_posts_shortcode_hero');


// 6.2 postlist
// =======================================================


function trend_posts_shortcode_list($atts, $content = NULL)
{   

    $atts = shortcode_atts(
        [
            'orderby' => 'date',
            'posts_per_page' => '5',
            'offset' => '0',
        ], $atts, 'recent-posts' );
     
    $query = new WP_Query( $atts );

    $output = '<ul class="feed-list">';
 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <li>
                                    <div class="card coat">
                                        <div class="block small-4">
                                            <div class="card-img">
                                                <a href="'. get_permalink() .'"> 
                                                    <img src="'. get_the_post_thumbnail_url( $id, 'trend_square' ).'">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block small-8">
                                            <div class="card-content">
                                            <h4><a href="'. get_permalink() .'">' . get_the_title() . '</a> </h4>
                                            </div>
                                        </div>

                                    </div>
                                </li>';
 
    endwhile;
 
    wp_reset_query();
 
    return $output . '</ul>';
}
add_shortcode('postlist', 'trend_posts_shortcode_list');



// 6.3 subhero
// =======================================================


function trend_posts_banner_subhero($atts, $content = NULL)
{   

    $atts = shortcode_atts(
        [
            'orderby' => 'meta_value_num',
            'posts_per_page' => '1',
            'offset' => '0',
            'meta_key' => 'my_post_viewed',
            'order'=> 'DESC'
        ], $atts, 'recent-posts' );
     
    $query = new WP_Query( $atts );
 
    $output = '<ul class="">';
 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <li>
                                    <a href="'. get_permalink() .'">
                                    <div class="card">
                                        <div class="card-subhero" style="background:url('. get_the_post_thumbnail_url( $id, 'large' ) . ')">
                                        <div class="content pad aire">
                                                <h3 class="dark">' . get_the_title() . '</h3>
                                                <p class="dark author-name">'. get_the_author() .'</p>
                                                </div>
                                        </div></a>
                                </li>';
 
    endwhile;
 
    wp_reset_query();
 
    return $output . '</ul>';
}
add_shortcode('subhero', 'trend_posts_banner_subhero');




// 6.4 List Popular post
// =======================================================


function trend_posts_popular_sidebar($atts, $content = NULL)
{   

    $atts = shortcode_atts(
        [
            'orderby' => 'meta_value_num',
            'posts_per_page' => '5',
            'offset' => '0',
            'meta_key' => 'my_post_viewed',
            'order'=> 'DESC'
        ], $atts, 'recent-posts' );
     
    $query = new WP_Query( $atts );
 
    $output = '
    <ul class="sidebar-feed-list">
    ';
 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <li>
            <a href="'. get_permalink() .'">                                 
                ' . get_the_title() . '
            </a><br/>
            <span class="time"> '. human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;' .'  </span>
        </li>';
 
    endwhile;
 
    wp_reset_query();
 
    return $output . '</ul>';
}
add_shortcode('splist', 'trend_posts_popular_sidebar');




// 7. Custom post functions
// ==========================================================================

function count_post_visits() {
 if( is_single() ) {
 global $post;
 $views = get_post_meta( $post->ID, 'my_post_viewed', true );
 if( $views == '' ) {
 update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
 } else {
 $views_no = intval( $views );
 update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
 }
 }
}
add_action( 'wp_head', 'count_post_visits' );



// 8. Acf groups
// ==========================================================================


if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5cf715dd340b6',
        'title' => 'ads',
        'fields' => array(
            array(
                'key' => 'field_5cf715e4c8e91',
                'label' => 'ad',
                'name' => 'ad',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-ads',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5ce9c5434a51a',
        'title' => 'Color categorías',
        'fields' => array(
            array(
                'key' => 'field_5ce9c54a3f467',
                'label' => 'Tag Color',
                'name' => 'tag_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '#000000',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5ce4bbde5e48d',
        'title' => 'Font',
        'fields' => array(
            array(
                'key' => 'field_5ce4bbe24eb89',
                'label' => 'Font',
                'name' => 'font',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ce4c09d623c9',
                'label' => 'Font name',
                'name' => 'font_name',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-font',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5ce4ac0687023',
        'title' => 'Footer',
        'fields' => array(
            array(
                'key' => 'field_5ce4ac2074c36',
                'label' => 'Copyright',
                'name' => 'copyright',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-footer',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5cdb8ccb10dbe',
        'title' => 'Global settings',
        'fields' => array(
            array(
                'key' => 'field_5cdb8cf1974d8',
                'label' => 'Glyphs',
                'name' => 'sprite_glyphs',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5ce4a849691a1',
                'label' => 'Glyphs Retina',
                'name' => 'sprite_glyphs_retina',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5cef3f00dfd28',
                'label' => 'Google Tag Manager',
                'name' => 'google_tag_manager',
                'type' => 'textarea',
                'instructions' => 'Pegue lo que dice "este código tan alto en la etiqueta <head> de la página como sea posible"',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5cef3f8aae8ef',
                'label' => 'Google Tag Manager (noscript)',
                'name' => 'google_tag_manager_noscript',
                'type' => 'textarea',
                'instructions' => 'Pegue también lo que dice "este código inmediatamente después de la etiqueta <body> de apertura"',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'new_lines' => '',
                'maxlength' => '',
                'placeholder' => '',
                'rows' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5cf7292f27bda',
        'title' => 'Profile user',
        'fields' => array(
            array(
                'key' => 'field_5cf729393c54f',
                'label' => 'avatar',
                'name' => 'tb_avatar',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'user_form',
                    'operator' => '==',
                    'value' => 'all',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5cf864c333993',
        'title' => 'social',
        'fields' => array(
            array(
                'key' => 'field_5cf864c729475',
                'label' => 'facebook',
                'name' => 'facebook_social',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5cf864dd29476',
                'label' => 'Instagram',
                'name' => 'instagram_social',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5cf864e729477',
                'label' => 'Twitter',
                'name' => 'twitter_social',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-social',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;