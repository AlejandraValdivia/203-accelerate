<?php
/**
 * The template for displaying all single Blog Posts
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section class="single-page">
      <div class="site-content">
        <div class="main-content">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
                <div class="post-social-icons">
                  <!--  //php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?> -->
                </div>
              <?php comments_template(); ?>
            <?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->
	
        <?php get_sidebar(); ?>
      </div><!-- .site-content -->
  </section><!-- .single-page -->

<nav id="navigation" class="container">
    <div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
</nav>

<?php get_footer(); ?>
