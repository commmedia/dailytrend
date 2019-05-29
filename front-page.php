
<?php
/**
 *  The main template file.
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
get_header(); ?>

<div class="page">
                <?php if (is_active_sidebar('front-1')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('front-1'); ?>
                </div>
            <?php endif; ?>


    <div class="coat">

        <div class="block small-12 medium-8">
                <div class="pad">

                <?php if (is_active_sidebar('front-2')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('front-2'); ?>
                </div>
            <?php endif; ?>


                </div>
    </div>



    <div class="block small-12 medium-4">


    <?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>

    </div>

    <div class="block">
    
    <?php if (is_active_sidebar('front-3')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('front-3'); ?>
                </div>
            <?php endif; ?>
    
    </div>



<?php get_footer(); ?>
