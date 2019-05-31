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

    <div class="block small-12 large-8">

        <div class="post-container">

            <div class="post-thumbnail" style="padding-top: 50px;">
                <img src="<?php the_post_thumbnail_url( 'trend_default' )?>" />
            </div>
           
            <div class="post-title">
                <div class="category-single-post"><?php the_category('&bull;'); ?></div>
                <h1><?php the_title() ?></h1>
            </div>

            <div class="post-meta">
                <ul class="">
                     <li class="item">Por <?php the_author(); ?></li>
                    <li class="item"><?php the_time('M d, Y'); ?></li>
                </ul>
            </div>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <div class="comments">
            <h5><div class="glyphsSprite twitter before"></div>Déjanos tu opinión en Twitter.</h5>
                <form class="block" action="https://twitter.com/intent/tweet" name="ComnentBox" target="_blank">
                    <div class="coat inputer">
                        <textarea id="ComnentBoxText" name="text" placeholder="Mensaje..."></textarea>
                        <input type="hidden" value="trendbusinessco" name="via" />
                        <input type="hidden" value="<?php the_permalink() ?>" name="url" />
                        <input type="submit" class="button block small-12 medium-4" value="Twittear" />
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="block small-12 large-4">
        <div class="pad">
             <?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="block">
        <div class="pad">
        <h3>Más tendencias económicas</h3>
             <?php if (is_active_sidebar('after-entry')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('after-entry'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>

<?php endwhile; ?>

        <?php else : ?>



        <?php endif; ?>



<?php get_footer(); ?>
