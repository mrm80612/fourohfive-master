<article id="post-<?php the_ID(); ?>" <?php post_class('about'); ?>>

<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<img src="<?php the_field('about_image');?>" alt="">

<h3 style="margin-left:2em;">
	<?php
		the_field('about');
	?>
</h3>

<?php
	the_content();
?>

</article>