<?php
/**
 * Template Name: Prices
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

get_header(); ?>

<main class="mt-3">

	<?php
	while ( have_posts() ) : the_post();

		/* Get content-page.php */
		get_template_part( 'template-parts/content', 'prices' );

	endwhile;
	?>

</main>

<?php
get_footer();
