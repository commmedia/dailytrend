<?php
/**
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */

?>

/**
 * Color *****
 */

::selection{
    background: <?php echo get_field('theme_color','options'); ?>;
    color: #fff
}

.shadowblack {
    box-shadow: -14px 15px 0px 0px <?php echo get_field('theme_color','options'); ?>;
}

#onesignal-bell-container.onesignal-reset .onesignal-bell-launcher.onesignal-bell-launcher-theme-default .onesignal-bell-launcher-button svg .background {
    fill: <?php echo get_field('theme_color','options'); ?>;
}

.active, .card-category-tag .post-categories a {
    background: <?php echo get_field('theme_color','options'); ?>!important;
}

.active a {
    color: #fff!important
}


/**
 * Typography *****
 */
<?php 
$font_name = get_field('font_name','options');
if ($font_name) : ?>
html{
	font-family: '<?php echo $font_name ?>', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
}
<?php endif;
?>

/**
 * GlyphsSprite *****
 */
.glyphsSprite {
        background-image: url(<?php echo get_field('sprite_glyphs','options'); ?> );
    } 
    @media (max-width: 740px) {
        .glyphsSprite {
            background-image: url(<?php echo get_field('sprite_glyphs_retina','options'); ?>);
        }
    }