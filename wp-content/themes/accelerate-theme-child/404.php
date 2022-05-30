<?php
/**
 * The template for displaying 404 error page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="error-page">
		<div class="main-content error-container" role="main">
			<div class="error-message">
				<h2>Uh oh!</h2>
          <p>You have reached<br>
             the end of the internet.<br>
             There's nothing here.<br>
             Looking for one of<br> 
             these?</p>
          <div class="">
            <a class="button" href="<?php echo site_url('/homepage/') ?>">Home</a>
          </div>
			</div>
			
			<div class="photo-credit error message">
      <p>Photo by <a href="https://unsplash.com/@karsten116?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Karsten Winegeart</a> on <a href="https://unsplash.com/s/photos/funny-dogs?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>
    </div>
		</div><!-- .main-content -->
	</div><!-- #primary -->