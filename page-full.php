<?php
/**
 * Template Name: Full Width
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
			    <?php get_template_part("template-parts/flexslider");?>
				<div class="wrapper cap clear-bottom">
					<section class="col-full">
						<header>
							<h1><?php the_title();?></h1>
						</header>
						<div class="copy">
							<?php the_content();?>
						</div><!--.copy-->
					</section><!--.col-2-->
				</div><!--.wrapper-->
			</article><!-- #post-## -->

			<?php endif; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
