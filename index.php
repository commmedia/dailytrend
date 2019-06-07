
<?php
/**
 *  The main template file.
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
get_header(); ?>

<div>
<div class="block small-12">
<h1 class="mlr10"><?php if (is_home() && get_option('page_for_posts')) echo get_the_title(get_option('page_for_posts')); ?><?php single_cat_title(''); ?></h1>
    <div class="pad">

        <ul class="feed">
        <?php if (have_posts()) : ?>
                    <?php while (have_posts()) // Post Loop
                    : the_post(); ?>


                <li>
                         <div class="card">
                            <div class="card-img">
                                <a href="<?php  the_permalink() ?>" ><img src="<?php  the_post_thumbnail_url( 'trend_square' ) ?>" /></a>
                            </div>
                            <div class="card-content">
                                <h4>
                                    <a href="<?php  the_permalink() ?>" ><?php the_title() ?></a>
                                </h4>
                                <p> Por <?php  the_author()?> </p>
                            </div>
                        </div>
                <li>
                    <?php endwhile; ?>
                <?php endif; ?>
        </ul>

    </div>
</div>

</div>


<?php get_footer(); ?>
