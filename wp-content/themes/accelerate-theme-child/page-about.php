<?php
/**
 * The template for displaying custom pages
 * Template Name: About Page
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='aboutpage-hero'>
				<p>
					<span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. 
				</p>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="all-services">
	<div class="site-content">
		<div class="our-services">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them. Here’s a brief overview of our offered services.</p>
		</div>
		<ul class="service">
			<?php query_posts('posts_per_page=3&post_type=services&order=ASC'); ?>
				<?php while (have_posts()) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "medium";
				?>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
				</li>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div>
</section>

	</div><!-- .site-content -->
</section><!-- .home-page -->

<section class="recent-posts">
	<div class="site-content">


	</div><!--site content -->
</section>

<?php get_footer(); ?>

<!--

1. create custom page template (should be about-page.php or page-about.php?) done
2. Create new page in admin, using custom page template done
3. create custom post type in functions.php (icon, title descp)(title:services) done
4. create a single-services.php file done
4. create custome query to fetch data from services post types done
5. create custome archive posts for each service

-->