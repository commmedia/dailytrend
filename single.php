<?php
/**
 *  Single
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
get_header(); ?>

<?php if (have_posts()) :
        ?>

        <?php while (have_posts()) : the_post();
        ?>


<div class="coat">

    <div class="block small-12 medium-8">

        <div class="post-container">

            <div class="post-thumbnail">
                <img src="<?php the_post_thumbnail_url( 'trend_default' )?>" />
            </div>

            <div class="post-title">
                <h1><?php the_title() ?></h1>
            </div>

            <div class="post-meta">
                <ul class="nav-list">
                    <li class="item"><?php the_time('M d, Y'); ?></li>
                    <li class="item"><?php the_category('&bull;'); ?></li>
                    <li class="item">Por </li>
                </ul>
            </div>

           

            <div class="post-content">
                <?php the_content(); ?>
            </div>

        </div>
    </div>


    <div class="block small-12 medium-4">
        <div class="pad">
             <?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>

<?php endwhile; ?>

        <?php else : ?>



        <?php endif; ?>



<?php get_footer(); ?>
