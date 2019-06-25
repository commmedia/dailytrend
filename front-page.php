
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
                    <div style="background-image: url(<?php 
                        $hero_cover = get_field('hero_cover','options');
                        if ($hero_cover) : ?>
                        <?php echo $hero_cover ?>
                        <?php endif;
                        ?>); margin-bottom:65px;" 
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
