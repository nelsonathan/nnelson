<?php
/*
  Template Name: About
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!-- About -->
	<div id="about" class="row">
	    <div class="container">
		  <a href="<?php site_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/external/nn-logo-dark.png" width="80px" style="margin-bottom:50px;" /></a>
		  
		  <h2>About Nathan.</h2>
	      <h3><?php echo get_field('introduction',$post->ID); ?></h3>
		  <p><?php echo get_field('about', $post->ID); ?></p>
	    </div>
	    
	</div>
	
	<?php echo do_shortcode('[instagram-feed showheader=false showbutton=false showfollow=false]'); ?>

<?php endwhile; ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
