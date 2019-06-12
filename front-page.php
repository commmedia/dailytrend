
<?php
/**
 *  The main template file.
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
get_header(); ?>


            <div class="block">
                <?php if (is_active_sidebar('front-1')) : ?>
                    <div <?php 
                        $hero_cover = get_field('hero_cover','options');
                        if ($hero_cover) : ?>
                        style="background-image: url(<?php echo $hero_cover ?>); margin-bottom:65px; padding: 25px 25px 0 25px"
                        <?php endif;
                        ?>
                    >
                        <?php dynamic_sidebar('front-1'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="coat">
                <div class="block small-12 large-8">
                    <div class="mlr10">
                        <?php if (is_active_sidebar('front-2')) : ?>
                            <div>
                                <?php dynamic_sidebar('front-2'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
            </div>

            <div class="block small-12 large-4">
                <?php if (is_active_sidebar('sidebar-1')) : ?>
                    <div class="smushi">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="block">
                <?php if (is_active_sidebar('front-3')) : ?>
                    <div>
                        <?php dynamic_sidebar('front-3'); ?>
                    </div>
                <?php endif; ?>
            </div>

<?php get_footer(); ?>
