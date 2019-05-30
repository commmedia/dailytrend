<?php
/**
 * The Header for our theme.
 *
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> 
<?php 
$font_name = get_field('font_name','options');
if ($font_name) : ?>
style="font-family: '<?php echo $font_name ?>', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;"
<?php endif;
?>
>

    <head>

         <?php 
            $google_tag_manager = get_field('google_tag_manager','options');
            if ($font) : ?>
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


    </head>

    

    <!-- body -->

    <body <?php body_class(); ?>>

    <?php 
            $google_tag_manager_noscript = get_field('google_tag_manager_noscript','options');
            if ($font) : ?>
            <?php echo $google_tag_manager_noscript ?>
            <?php endif;
            ?>

     <!-- Theme options -->
    <style>
    .glyphsSprite {
        background-image: url(<?php echo get_field('sprite_glyphs','options'); ?> );
    } 
    @media (max-width: 740px) {
        .glyphsSprite {
            background-image: url(<?php echo get_field('sprite_glyphs_retina','options'); ?>);
        }
    }
    </style>

    <!-- Ads -->
    

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
                                <li class="item">
                                </li>
                                
                            </ul>

                            <div id="menu-trigger">

                                <?php wp_nav_menu(); ?>

                            </div>
                        </div>
                    </nav>
                </header>

        <main>
