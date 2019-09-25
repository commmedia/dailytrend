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
    'name' => __( 'Before Enty', 'theme-slug' ),
    'id' => 'before-entry',
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

register_sidebar( array(
    'name' => __( 'Footer 1', 'theme-slug' ),
    'id' => 'footer-1',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name' => __( 'Footer 2', 'theme-slug' ),
    'id' => 'footer-2',
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

        wp_enqueue_script( 'trend-global', get_stylesheet_directory_uri() . '/libraries/slider/slick/slick.min.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/global.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-1.11.0.min.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'trend-global', get_stylesheet_directory_uri() . '/js/global.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
        wp_enqueue_style( 'trend-library', get_stylesheet_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/libraries/slider/slick/slick.css' );
        wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/libraries/slider/slick/slick-theme.css' );
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

// 6. Actions
// ==========================================================================

function styling()
{
    include get_parent_theme_file_path('/style.php');
}
add_action('styling', 'styling');


function share()
{
    include get_parent_theme_file_path('/inc/share.php');
}
add_action('share', 'share');

function comment()
{
    include get_parent_theme_file_path('/inc/comment.php');
}
add_action('comment', 'comment');


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

    $categories = get_the_category();
    $output = '<ul class="feed-list">';

 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <li>
                                    <div class="card coat">
                                        <div class="block small-12 large-4">
                                            <div class="card-img">
                                                <a href="'. get_permalink() .'"> 
                                                    <img src="'. get_the_post_thumbnail_url( $id, 'trend_square' ).'">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block small-12 large-8">
                                            <div class="card-content">
                                            <div class="coat">
                                            <div class="card-category-tag" >'. get_the_category_list( '', '', $recent["ID"] ) .'</a></div>
                                            </div>
                                            <h4><a href="'. get_permalink() .'">' . get_the_title() . '</a> </h4>
                                            <p> Por '. get_the_author().' </p>
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
            'order'=> 'DESC',
            'shadow'=> ''
        ], $atts, 'recent-posts' );
     
    $query = new WP_Query( $atts );
 
    $output = '
    <ul class="sidebar-feed-list shadowblack">
    ';
 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <li>
            <a href="'. get_permalink() .'">                                 
                ' . get_the_title() . '
            </a><br/>
            <span class="time"> '. human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;' .'  </span>
            <hr class="q-line" />
        </li>';
 
    endwhile;
 
    wp_reset_query();
 
    return $output . '</ul>';
}
add_shortcode('splist', 'trend_posts_popular_sidebar');

// 6.1 Carrousel
// =======================================================

function trend_posts_shortcode_carrousel($atts, $content = NULL)
{
    $atts = shortcode_atts(
        [
            'orderby' => 'date',
            'posts_per_page' => '4'
        ], $atts, 'recent-posts' );
     
    $query = new WP_Query( $atts );
 
    $output = '<div class="responsive">';
 
    while($query->have_posts()) : $query->the_post();
 
        $output .= '
        <div>
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
            </div> ';
 
    endwhile;
 
    wp_reset_query();
 
    return $output . '</div>';
}
add_shortcode('carrousel', 'trend_posts_shortcode_carrousel');




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


// 8. Flexi videos
// ==========================================================================

// Videos responsive autómaticos
if(!function_exists('video_content_filter')) {
    function video_content_filter($content) {
    
           // busca algún iFrame en la página
    $pattern = '/<iframe.*?src=".*?(vimeo|youtu\.?be).*?".*?<\/iframe>/';
    preg_match_all($pattern, $content, $matches);
    
    foreach ($matches[0] as $match) {
    // iFrame encontrado, ahora lo envolvemos en un DIV ...
    $wrappedframe = '<div class="video-container">' . $match . '</div>';
    
    // Intercambia el original con el video, ahora encerrado
    $content = str_replace($match, $wrappedframe, $content);
    }
    return $content;
    }
    // Aplicar a areas de contenido de la página o entrada 
    add_filter( 'the_content', 'video_content_filter' );
    
    // Aplicar a los widgets si se quiere
    add_filter( 'widget_text', 'video_content_filter' );
   }


// 9. Custom Login
// ==========================================================================
function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');
function my_login_logo_url_title()
{
    return 'Nombre del sitio web';
}
add_filter('login_headertitle', 'my_login_logo_url_title');
function my_login_logo()
{ ?>
    
<?php 
}
add_action('login_enqueue_scripts', 'my_login_logo');
function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/css/style-login.css');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');

// 10. Pagination
// ==========================================================================

function trend_numeric_posts_nav()
{
    if (is_singular())
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;
    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="center"><ul class="pagination">' . "\n";
    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link('Anterior'));
    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active indigo"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links))
            echo '<li>…</li>';
    }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active indigo"' : '';
        printf('<li%s class="waves-effect"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li class="waves-effect">…</li>' . "\n";
        $class = $paged == $max ? ' class="active indigo"' : '';
        printf('<li%s class="waves-effect"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link('Siguiente'));
    echo '</ul></div>' . "\n";
}

// 10. Acf groups
// ==========================================================================

/* vichaunter desktop postbox */ function vichaunter_postbox_content() 
{ echo '

    <p>Capacitación orienteda al mejoramiento continuo de la calidad de nuestro producto</p>

    <h2>SEO</h2>
    <br>
    <div>
    <h3><b>Introducción</b></h3>
    <p>En este video me presento, presento qué es lo que estaremos viendo en esta serie de videos y el por qué es importante</p>
    <a href="https://www.loom.com/share/d32447e4ba774c59b337c9d5ab0254bf" target="_blank">Ver video <span aria-hidden="true" class="dashicons dashicons-external"></span></a>
    </div>
    <hr>

    <div>
    <h3><b>¿Qué es SEO?</b></h3>
    <p>Hablaremos de las definiciones básicas y los objetivos</p>
    <a href="https://www.loom.com/share/b5bd34fa96e0437a9791c3dabd0d31a8">Ver video <span aria-hidden="true" class="dashicons dashicons-external"></span></a>
    </div>
    <hr>

    <div>
    <h3><b>Primer parrafo</b></h3>
    <p>La importancia del primer párrafo en el SEO y cómo lo implementamos</p>
    <a href="https://www.loom.com/share/9640ceba406043429a690a1de3a9b6cf">Ver video <span aria-hidden="true" class="dashicons dashicons-external"></span></a>
    </div>
    <hr>


    <div>
    <h3><b>Velocidad de carga en nuestras publicaciones y Cómo optimizar nuestras imágenes</b></h3>
    <p>Cómo verificamos la velocidad de carga de nuestras publicaciones</p>
    <p>Haremos la implementación SEO a las imágenes y las buenas prácticas a la hora de subirlas</p>
    <a href="https://www.loom.com/share/f4c51632e1d14673b73d7c84f9c0c5b7">Ver video <span aria-hidden="true" class="dashicons dashicons-external"></span></a>
    </div>
    <hr>
    
   
    
    '; } function vichaunter_postbox_content_setup() 
{ $id = 'vichaunter_postbox_desktop'; $title = __( 'Academia' ); wp_add_dashboard_widget( $id, $title, 'vichaunter_postbox_content' ); } add_action('wp_dashboard_setup', 'vichaunter_postbox_content_setup');

// 10. Acf groups
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
                'key' => 'field_5d0a4eb34e57f',
                'label' => 'Theme Color',
                'name' => 'theme_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
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
                'key' => 'field_5d005d90cbed0',
                'label' => 'Hero Cover',
                'name' => 'hero_cover',
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
        'key' => 'group_5d3b4dd636efd',
        'title' => 'Social',
        'fields' => array(
            array(
                'key' => 'field_5d3b4ddbb639e',
                'label' => 'Facebook',
                'name' => 'facebook',
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
                'key' => 'field_5d3b4e1d0fa8f',
                'label' => 'Twitter',
                'name' => 'twitter',
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
                'key' => 'field_5d3b4e2e0ee81',
                'label' => 'Instagram',
                'name' => 'instagram',
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