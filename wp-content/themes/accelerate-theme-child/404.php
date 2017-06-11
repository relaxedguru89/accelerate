<?php
/**
 * The template for displaying 404 pages
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<!--404 page content -->
			<div class="error-message">
				<h2>Seems Like You're Lost</h2>
				<figure class="gif">
					<img src="https://media.giphy.com/media/13nIEx0EZCGrh6/giphy.gif">
				</figure>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3>Take Me Back, Jules</h3></a>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>