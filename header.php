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

    <header class="page-header">
                    <nav id="Top-bar" class="page-nav-container">
                        <div class="page-nav-content">
                            <ul id="nav-large" class="nav-list page-nav-menu-large">
                                 <li class="item button-link menu-toggle-button">
                                    <div class="">
                                         <div class="glyphsSprite menu"></div>
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

                            <div>
                                <div class="nav-container">

                                    <ul class="page-menu">
                                 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

        <main>
