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

<div class="block">
        <div>
             <?php if (is_active_sidebar('before-entry')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('before-entry'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<div class="coat">

    <div class="block small-12 large-8">

        <div class="post-container">

            <div class="post-thumbnail">
                <img src="<?php the_post_thumbnail_url( 'trend_default' )?>" />
            </div>
           
            <div class="post-title">
                <div class="category-single-post"><?php the_category('<span class="trend-point">&bull;</span>'); ?></div>
                <h1><?php the_title() ?></h1>
            </div>

            <div class="post-meta">
                <ul class="">
                     <li class="item">Por <?php the_author(); ?></li>
                    <li class="item"><?php the_time('M d, Y'); ?></li>
                </ul>
            </div>

            <div class="post-content">
                <div class="share-buttons" style="margin-bottom: 30px;">
                <div class="nav-list">
                    <a class="button block item"  href="javascript:fbshareCurrentPage()" style="color:#000; text-align:center; margin: 0 5px">Facebook</a>
                    <a class="button block item" href="javascript:twshareCurrentPage()" style="color:#000; text-align:center; margin: 0 5px">Twitter</a>
                </div>
                </div>

                <?php the_content(); ?>
                
                <div class="share-buttons" style="margin-bottom: 30px;">
                <div class="nav-list">
                    <a class="button block item"  href="javascript:fbshareCurrentPage()" style="color:#000; text-align:center; margin: 0 5px">Facebook</a>
                    <a class="button block item" href="javascript:twshareCurrentPage()" style="color:#000; text-align:center; margin: 0 5px">Twitter</a>
                </div>
                </div>
            </div>
            <div class="post-comments">
            <h5><div class="glyphsSprite twitter before"></div>Déjanos tu opinión en Twitter.</h5>
                <form class="block" action="https://twitter.com/intent/tweet" name="ComnentBox" target="_blank">
                    <div class="coat inputer">
                        <textarea id="ComnentBoxText" name="text" placeholder="Mensaje..."></textarea>
                        <input type="hidden" value="<?php the_permalink() ?>" name="url" />
                        <input type="submit" class="button block small-12 medium-4" value="Twittear" />
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="block small-12 large-4">
             <?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" class="smushi">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
    </div>

    <div class="block">
        <div class="pad">
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
