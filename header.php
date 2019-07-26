<?php
/**
 * The Header for our theme.
 *
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

    <head>

         <?php 
            $google_tag_manager = get_field('google_tag_manager','options');
            if ($google_tag_manager) : ?>
            <?php echo $google_tag_manager ?>
            <?php endif;
            ?>

        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

            <?php 
            $font = get_field('font','options');
            if ($font) : ?>
            <?php echo $font ?>
            <?php endif;
            ?>

        <title>
            <?php wp_title(''); ?>
        </title>

        <!-- wp_head() -->
        <?php wp_head(); ?>

        <!-- ads section -->

        <?php 
            $ad = get_field('ad','options');
            if ($ad) : ?>
            <?php echo $ad ?>
            <?php endif;
            ?>
    </head>
    
    <!-- body -->

    <body <?php body_class(); ?>>
    
    <style>
        <?php do_action('styling'); ?>
    </style>

    <?php 
            $google_tag_manager_noscript = get_field('google_tag_manager_noscript','options');
            if ($google_tag_manager_noscript) : ?>
            <?php echo $google_tag_manager_noscript ?>
            <?php endif;
            ?>

     <!-- Theme options -->    

    <header class="page-header">
                    <nav id="Top-bar" class="page-nav-container">
                        <div class="page-nav-content">
                            <ul id="nav-large" class="nav-list page-nav-menu-large">
                                 <li class="item button-link menu-toggle-button" onclick="myFunction()">
                                    <div class="">
                                         <div class="glyphsSprite hamburger"></div>
                                    </div>
                                </li>
                                <li class="logo item logo-container">
                                    <a href="/">
                                        <div class="glyphsSprite logo"></div>
                                    </a>
                                </li>
                                <li class="item side-right">
                                <div class="hide-small">
                                    <ul class="nav-list">
                                    <?php 
                                    $twitter = get_field('twitter','options');
                                    if ($twitter) : ?>
                                    <li class="item"><a href="https://twitter.com/<?php echo $twitter ?>"><div class="glyphsSprite twitter"></div></a></li>
                                    <?php endif;
                                    ?>

                                    <?php 
                                    $facebook = get_field('facebook','options');
                                    if ($facebook) : ?>
                                    <li class="item"><a href="https://facebook.com/<?php echo $facebook ?>"><div class="glyphsSprite facebook"></div></a></li>
                                    <?php endif;
                                    ?>

                                    <?php 
                                    $instagram = get_field('instagram','options');
                                    if ($instagram) : ?>
                                    <li class="item"><a href="https://facebook.com/<?php echo $instagram ?>"><div class="glyphsSprite instagram"></div></a></li>
                                    <?php endif;
                                    ?>
                                    </ul>
                                    </div>
                                </li>    
                            </ul>
                            <div id="menu-trigger">
                                <?php wp_nav_menu(); ?>
                            </div>
                        </div>
                    </nav>
                </header>
        <main class="page">
