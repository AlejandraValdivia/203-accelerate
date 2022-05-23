<?php
/**
 * The template for displaying the homepage
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

	
	<div id="primary" class="home-page hero-content"> 
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="homepage-hero">
					<?php the_content(); ?>
					<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
				</div>
				
			<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<section class="featured-work">
	<div class="site-content">
			<h4>Featured Work</h4>

			<ul class="homepage-featured-work">
					<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
					<!-- The loop -->
					<?php while ( have_posts() ) : the_post(); 
							$image_1 = get_field('image_1');
							$size = "medium";
					?>
					
					<li class="individual-featured-work>
							<figure>
								<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
							</figure>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>
			

					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
	</div><!--.site-content  -->
</section>


<!----- Recent BLOG post and TWITTER widget  ---->

	<div class="blog-twitter-section"><!--.blog-twitter-section starts here--->
		<div class="site-content">
				<!--<section class="recent-posts">-->
							
							<div class="blog-post">
								<h4>From the Blog</h4>
								<?php query_posts('posts_per_page=1'); ?>
								<!-- The loop -->
								<?php while ( have_posts() ) : the_post(); ?>
										<h3><?php the_title(); ?></h3>
										<?php the_excerpt(); ?>
								<?php endwhile; // end of the loop. ?> 
								<?php wp_reset_query(); // resets the altered query back to the original ?>
							</div>
		</div><!-- .site-content class ends here -->
				<!-- </section> -->

								<!-- Tweet widget starts here -->
				<!--<section class="twitter-posts">-->

								<div class="tweet-widget">
										<h4>Recent Tweet</h4>
											<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
													<div id="secondary" class="widget-area" role="complementary">
													</div>
															<?php dynamic_sidebar( 'sidebar-2' ); ?>
													</div>
													<div class="follow-us-link">	
															<h4><a href="https://twitter.com/Alex_V1000" target="_blank">Follow us ›</a></h4>
													</div>
											<?php endif; ?>
									</div>
				<!--	</section> -->
	</div><!-- Blog Twitter section ends here -->

<?php get_footer(); ?>
