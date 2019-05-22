<?php
?>

</main>

<footer>

<div class="copyright">

<?php 
$copyright = get_field('copyright','options');
if ($copyright) : ?>
<p><?php echo $copyright ?></p>
<?php endif;
?>

</div>

</footer>