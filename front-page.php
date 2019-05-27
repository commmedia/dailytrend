
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


    <div class="coat pad">
        <?php if (is_active_sidebar('front-2')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('front-2'); ?>
                </div>
            <?php endif; ?>
         
    </div>

    <div class="coat">

        <div class="block small-12 medium-8">
                <div class="pad">

                <?php if (is_active_sidebar('front-3')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('front-3'); ?>
                </div>
            <?php endif; ?>


                </div>
    </div>



    <div class="block small-12 medium-4">


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



<?php get_footer(); ?>
