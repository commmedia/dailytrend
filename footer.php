<?php
?>

</main>

<footer style="margin-top: 50px">

<div class="coat">
<div class="block" style="margin-bottom:30px">
<div class="mlr10">
                         
                    </div>
</div>

                <div class="block small-12 large-5" style="margin-top: 30px">
                

                    <div class="mlr10">
                    
                        <?php if (is_active_sidebar('footer-1')) : ?>
                            <div>
                                <?php dynamic_sidebar('footer-1'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    </div>

                    <div class="block small-12 large-2" style="margin-top: 30px">
                    <div class="mlr10">
                    <ul>
                                    <?php 
                                    $twitter = get_field('twitter','options');
                                    if ($twitter) : ?>
                                    <li class="item" style="margin-bottom: 10px"><a href="https://twitter.com/<?php echo $twitter ?>" target="_blank"><div class="glyphsSprite twitter"></div> Twitter</a></li>
                                    <?php endif;
                                    ?>

                                    <?php 
                                    $facebook = get_field('facebook','options');
                                    if ($facebook) : ?>
                                    <li class="item" style="margin-bottom: 10px"><a href="https://facebook.com/<?php echo $facebook ?>"><div class="glyphsSprite facebook"></div> Facebook</a></li>
                                    <?php endif;
                                    ?>

                                    <?php 
                                    $instagram = get_field('instagram','options');
                                    if ($instagram) : ?>
                                    <li class="item" style="margin-bottom: 10px"><a href="https://facebook.com/<?php echo $instagram ?>"><div class="glyphsSprite instagram"></div> Instagram</a></li>
                                    <?php endif;
                                    ?>
                                    </ul>
                                </li>    
                            </ul>
                    </div>
                    </div>

                    <div class="block small-12 large-2">
                    <div class="mlr10" style="margin-top: 30px">
                    <?php wp_nav_menu(array(
                        'menu_class'      => '',
                    )); ?>
                    </div>
                    </div>

                    <div class="block small-12 large-3" style="margin-top: 30px">
                    <div class="mlr10" style="text-align: center">

                    <img width="180" src="<?php echo get_template_directory_uri(); ?>/static/media/comm.png" />
                    
                    </div>
                    </div>
            </div>

<div class="copyright">
<?php 
$copyright = get_field('copyright','options');
if ($copyright) : ?>
<p><?php echo $copyright ?></p>
<?php endif;
?>
</div>

<?php wp_footer(); ?>

</footer>