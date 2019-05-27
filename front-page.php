
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


<section id="after-slider-ad">
    <div class="coat pad">
         <hr style="height:90px; width: 728px">
    </div>
</section>

<div class="coat">

<div class="block small-12 medium-8">
        <div class="pad">

        <ul class="feed-list">
            <?php
                
            $args = array(
                'post_status' => 'publish',
                'numberposts' => 8,
            );
            
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent) {
                    echo '<li>
                            <div class="card coat">
                                <div class="card-img block small-4">
                                    <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trend_square')) . '">

                                </div>

                                <div class="card-content block small-7">
                                    <div class="coat">
                                        <h4 class="category-tag">'. get_the_category() .'</h4>
                                    </div>
                                <h3><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </h3>
                                </div>

                            </div>
                        </li> 
                    ';
                }
                wp_reset_query();
            ?>
            </ul>

        </div>
</div>



<div class="block small-12 medium-3 pad">


<div class="follow-buttons">
<a href="#" class="button">Danos un like en Facebook</a>
<a href="#" class="button">Síguenos en Twitter</a>
</div>

                            <div class="card video">
                                <div class="card-category">
                                    Trending video
                                </div>

                                <div class="card-img">
                                    <img src="http://web.trendbussines.lndo.site/wp-content/uploads/2019/05/qvbu8vxkq0yzhujyn4ji-1.png" />
                                </div>
                                <div class="card-content">
                                     <h4 class="dark">DASASDSDS</h4>
                                </div>
                                <div class="glyphsSprite play player"></div>
                            </div>

                            <hr style="height:250px; width: 300px">

                    </div>


</div>


</div>

</div>


<?php get_footer(); ?>
