<?php
/**
 * Template Name: schedule
 */

get_header(); ?>
<main><?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'schedule' );

	endwhile;
?>
</main>

<?php
get_footer();