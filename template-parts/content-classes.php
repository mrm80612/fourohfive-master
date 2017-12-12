<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('classes'); ?>>
	<?php
		/**
		 * Gets the featured image.
		 * @link https://developer.wordpress.org/reference/functions/the_post_thumbnail/
		 */
		the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
	<header class="text-center mt-3" style="color:#225374">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php
		/**
		 * The <div> below is surrounding your post content. You can change it from a <div>
		 * to something else if you wish. You can also add classes to it, etc. It all
		 * depends on how you want to format things
		 */
	?>
	<div class="largecontainer">
	<div class="grid justify-content-center">
		<?php

			// check if the repeater field has rows of data
			if( have_rows('classes') ):

			 	// loop through the rows of data
			    while ( have_rows('classes') ) : the_row(); ?>
					
					<div class="grid-item">
				        
				        <h2 style="color:#225374">
				        	<?php the_sub_field('title'); ?>
				        </h2>
				        <p>
				        	<?php the_sub_field('description'); ?>
				        </p>
					</div>
			  <?php  endwhile;

			else :

			    // no rows found

			endif;

			?>
	</div>
	</div>
</article>
