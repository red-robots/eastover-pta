<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :

			get_template_part( 'template-parts/content', 'list' );

		endif; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
