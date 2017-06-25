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
			<?php query_posts('posts_per_page=5&post_type=services&order=ASC'); ?>
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
		</ul><!--list of services-->

		<div class="interested-contact">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
		</div> <!---contact cta -->

	</div><!-- .site-content -->
</section><!-- .home-page -->

<?php get_footer(); ?>

