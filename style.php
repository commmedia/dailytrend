<?php
/**
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */

?>
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