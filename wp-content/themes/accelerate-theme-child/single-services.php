<?php
/**
 * The template for displaying services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$image_1 = get_field('image_1');
			?>
				<article class="services">
					
					<div class="services-images">
							<?php if($image_1) { ?>
								<?php echo wp_get_attachment_image( $image_1, $size ); ?>
							<?php } ?>
					</div><!--images-->
					
					<aside class="services-sidebar">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</aside><!-- title & content -->

				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>