<?php
/**
 * The template for displaying the about page
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
	<div class="main-content-about" role="main">

        <?php while ( have_posts() ) : the_post();
            $our_services = get_field('our_services');
            $our_services_description = get_field('our_services_description');
            $icon_1 = get_field('icon_1');
            $strategy = get_field('strategy');
            $strategy_description = get_field('strategy_description');
            $mapping = get_field('mapping');
            $mapping_description = get_field('mapping_description');
            $icon_2 = get_field('icon_2');
            $icon_3 = get_field('icon_3');
            $social_media_strategy = get_field('social_media_strategy');
            $social_media_strategy_description = get_field('social_media_strategy_description');
            $design_development = get_field('design_development');
            $design_development_description = get_field('design_development_description');
            $icon_4 = get_field('icon_4');
            $size = "medium";
        ?>

        <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>	   
	</div><!-- .main-content -->
    </div><!-- #primary -->
   
    <div class="our-service">
        <h4><?php echo $our_services; ?></h4>
        <p><?php echo $our_services_description; ?></p>
    </div> 

    <div id="secondary"> 

        <article class="content-strategy">
            <div class="icon-left">
                <?php if($icon_1) { echo wp_get_attachment_image( $icon_1, $size ); } ?>
            </div>
            <div class="text-right">
                <h4><?php echo $strategy; ?></h4>
                <p><?php echo $strategy_description; ?></p>
            </div>
        </article>

        <article class="influencer-mapping">
            <div class="icon-right">
                <?php if($icon_2) { echo wp_get_attachment_image( $icon_2, $size ); } ?>
            </div> 
            <div class="text-left">
                <h4><?php echo $mapping; ?></h4>
                <p><?php echo $mapping_description; ?></p>
            </div>
        </article>

        <article class="social-media-strategy">
            <div class="icon-left">
                <?php if($icon_3) { echo wp_get_attachment_image( $icon_3, $size ); } ?>
            </div>
            <div class="text-right">
                <h4><?php echo $social_media_strategy; ?></h4>
                <p><?php echo $social_media_strategy_description; ?></p>
            </div>
        </article>

        <article class="design-development">
            <div class="icon-right">
                <?php if($icon_4) { echo wp_get_attachment_image( $icon_4, $size ); } ?>
            </div> 
            <div class="text-left">     
                <h4><?php echo $design_development; ?></h4>
                <p><?php echo $design_development_description; ?></p>
            </div>  
            </article>

        </div>
    </div>

<nav id="navigation" class="container">
    <p>Interested in working with us?</p>
    <p><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></p>
</nav>
<br>

<?php get_footer(); ?>