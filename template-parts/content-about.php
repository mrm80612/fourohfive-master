<article id="post-<?php the_ID(); ?>" <?php post_class('about'); ?>>

<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<img src="<?php the_field('about_image');?>" alt="">

<div class="abouttext">
	<?php
		the_field('about');
	?>
</div>

<?php
	the_content();
?>

</article>