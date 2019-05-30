
<?php
/**
 *  The main template file.
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
get_header(); ?>

<div class="coat">

<div class="block small-12 large-8">
<div class="pad">

<h1><?php if (is_home() && get_option('page_for_posts')) echo get_the_title(get_option('page_for_posts')); ?>
                            <?php single_cat_title(''); ?></h1>

<ul class="feed">
<?php if (have_posts()) : ?>
            <?php while (have_posts()) // Post Loop
            : the_post(); ?>


<li>
<div class="card">
<?php the_title(); ?>
</div>
<li>

            <?php endwhile; ?>
        <?php endif; ?>
</ul>

</div>
</div>


<div clas="block small-12 large-4">
<div class="pad">
<?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
</div>
</div>

</div>


<?php get_footer(); ?>
