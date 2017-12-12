<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('prices'); ?>>


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
	<?php
	the_content();
?>
	<!-- <div class="largecontainer" -->
		<div class="grid-1-1-1-1 d-flex justify-content-center">
			<?php

				// check if the repeater field has rows of data
				if( have_rows('prices') ):

				 	// loop through the rows of data
				    while ( have_rows('prices') ) : the_row(); ?>
						<div>

				        <h3 style="margin-left:2em;">
				        	<?php the_sub_field('service'); ?>
				        </h3>
				        <h2 style="margin-left:2em; color:#225374">
				        	<?php the_sub_field('price'); ?> - 
				        </h2>
				        <div class="list-prices">
					        <?php the_sub_field('description'); ?>
					    </div>
				        </div>

				  <?php  endwhile;

				else :

				    // no rows found

				endif;

				?>
		</div>
</article>
