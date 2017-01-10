<?php
/*
  Template Name: Homepage
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- About -->
<div id="about-intro" class="row">
    <div class="container">
	    
	  <a href="<?php site_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/external/nn-logo-light.png" width="80px" style="margin-bottom:5%; margin-top:-5%;" /></a>
	  
	  <h2>Nathan Nelson<br />Designing &amp; building creative experiences for the web</h2>
      <h3><?php echo get_field('introduction', $post->ID); ?></h3>
      <h3><i class="fa fa-angle-down faa-bounce animated" aria-hidden="true"></i></h3>
    </div>
    
</div>

<!-- Featured Projects -->
<div id="featured" class="row">
	<div class="container">
		
	<h1>Featured Projects</h1>

	  <?php
	  $args = array( 'post_type' => 'projects','posts_per_page' => 3, 'orderby' => 'rand');
	  $loop = new WP_Query( $args );
	  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	  
	  <?php if ( get_field( 'featured' ) ): ?>
	  	
	  <div class="project" data-sr="wait 1s and enter right">
		  
		<div class="col-md-5">
			<h2><?php echo get_field('client',$post->ID); ?></h2>
	        <h3 class="type"><?php echo get_field('project_type',$post->ID); ?></h3>
	        <h3 class="intro"><?php echo get_field('project_intro',$post->ID); ?></h3>
	        <p><a href="<?php echo get_field('website_link',$post->ID); ?>" target="_blank">View Website</a></p>
		</div>
	
	    <div class="col-md-7 wow bounceInUp">
		    <img  src="<?php echo get_field('image', $post->ID); ?>" />
	    </div>	
	
	  </div>
	  
	  	<?php else: // field_name returned false ?>
		<?php endif; // end of if field_name logic ?>

	
	  <?php endwhile; ?>
	  <?php wp_reset_query();?>
	
	</div>
</div>

<div id="allprojects" class="row">
	<div class="container">

		<h2>
			<a href="<?php site_url(); ?>/projects">View All Projects</a>
		</h2>

	</div>
</div>

<!-- About -->
<div id="about" class="row">
    <div class="container">
	  
	  <h2>About Nathan.</h2>
	  <p><?php echo get_field('about', $post->ID); ?></p>
    </div>
    
</div>
<?php echo do_shortcode('[instagram-feed showheader=false showbutton=false showfollow=false]'); ?>


<?php endwhile; ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
