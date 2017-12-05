<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('exhibits'); ?>>


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
		<!-- <?php

			// check if the repeater field has rows of data
			if( have_rows('current_exhibit') ):

			 	// loop through the rows of data
			    while ( have_rows('current_exhibit') ) : the_row(); ?>
					<div>
			        <img src="<?php the_sub_field('current_image'); ?>" />

			        <h3 style="margin-left:2em;">
			        	<?php the_sub_field('current_name'); ?>
			        </h3>
			        <p style="margin-left:2em;">
			        	<?php the_sub_field('current_start'); ?> - 
			        	<?php the_sub_field('current_end'); ?>
			        </p>
			        </div>

			  <?php  endwhile;

			else :

			    // no rows found

			endif;

			?> -->

</article>
