
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

<h1><?php printf(__('Resultados para: %s', 'trends'), get_search_query()); ?></h1>

<ul class="feed">

<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
        ?>


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




            <?php endwhile; ?>

       


            <?php else : ?>


            <div class="coat">
            <div class="block center">
            <h1>Oooops.</h1>
            <p>No encontramos resultados</p>
            <a class="button" href="/">Vuelve al inicio</a>
            </div>



        <?php endif; ?>
</ul>

</div>
</div>


<div clas="block small-12 large-4">
<div class="pad">
<?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" class="pad">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
</div>
</div>

</div>


<?php get_footer(); ?>
