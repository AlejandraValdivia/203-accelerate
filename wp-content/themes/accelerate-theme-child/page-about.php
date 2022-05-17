<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
			<div class="main-content hero-wrapper" role="main">
					<?php while ( have_posts() ) : the_post(); 
					$services_tagline = get_field('services_tagline');
					?>

        		<h3 class="about-hero-text"><?php echo $services_tagline; ?></h3>
            
					<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="site-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post();
			$services_page_heading = get_field('services_page_heading');
			$services_page_description = get_field('services_page_description');
			$service_1_title = get_field('service_1_title');
			$service_1_description = get_field('service_1_description');
			$service_1_icon = get_field('service_1_icon');
			$service_2_title = get_field('service_2_title');
			$service_2_description = get_field('service_2_description');
			$service_2_icon = get_field('service_2_icon');
			$service_3_title = get_field('service_3_title');
			$service_3_description = get_field('service_3_description');
			$service_3_icon = get_field('service_3_icon');
			$service_4_title = get_field('service_4_title');
			$service_4_description = get_field('service_4_description');
			$service_4_icon = get_field('service_4_icon');
			$contact_tagline = get_field('contact_tagline');

			$size = "medium";

		?>
<div class="content-wrapper">
					<div class="featured-services-intro">
						<h3><?php echo $services_page_heading; ?></h3>
						<p><?php echo $services_page_description; ?></p>				
					</div>
				</div>

				<section class="featured-services-group">
					<article class="featured-service-item">
							<?php if($service_1_icon) { echo wp_get_attachment_image($service_1_icon, $size); } ?>
						<div class="featured-service-text">
							<h4><?php echo $service_1_title; ?></h4>
							<p><?php echo $service_1_description; ?></p>
						</div>
					</article>

					<article class="featured-service-item">
						<div class="featured-service-text">
							<h4><?php echo $service_2_title; ?></h4>
							<p><?php echo $service_2_description; ?></p>						
						</div>
							<?php if($service_2_icon) { echo wp_get_attachment_image($service_2_icon, $size); } ?>
					</article>

					<article class="featured-service-item">
							<?php if($service_3_icon) { echo wp_get_attachment_image($service_3_icon, $size); } ?>
					<div class="featured-service-text">
							<h4><?php echo $service_3_title; ?></h4>
							<p><?php echo $service_3_description; ?></p>						
						</div>
					</article>

					<article class="featured-service-item">
						<div class="featured-service-text">
							<h4><?php echo $service_4_title; ?></h4>
							<p><?php echo $service_4_description; ?></p>
						</div>
							<?php if($service_4_icon) { echo wp_get_attachment_image($service_4_icon, $size); } ?>
					</article>
				</section>

				<section class="contact-link">
					<div class="content-wrapper">
						<p><?php echo $contact_tagline; ?></p>
						<p><a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></p>
					</div>
				</section>
			<?php endwhile; // end of the loop. ?>

</div>
</section>


<?php get_footer(); ?>
