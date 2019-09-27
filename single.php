<?php
/**
 *  Single
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
?>
<?php get_header(); ?>
 
    <?php
    // The loop
    if ( have_posts() ) :
      while (have_posts() ) : the_post();
        // replaced with Ajax Load More shortcode
        echo do_shortcode('[ajax_load_more container_type="ul" single_post="true" single_post_id="'.get_the_ID().'" single_post_order="previous" post_type="post"]');
      endwhile;
    endif;
    ?>

    <hr style="opacity:0; height:200px">
 
<?php get_footer(); ?>