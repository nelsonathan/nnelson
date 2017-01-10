<?php
/*
  Template Name: Projects
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- About -->
<div id="about-intro" class="row">
    <div class="container">
	    
	  <a href="<?php site_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/external/nn-logo-light.png" width="80px" style="margin-bottom:5%; margin-top:-5%;" /></a>
	  
	  <h2>Projects</h2>
      <h3>Over the years I have built creative websites for a range of clients. Take a look at some of my recent work</h3>
      <h3><i class="fa fa-angle-down faa-bounce animated" aria-hidden="true"></i></h3>
    </div>
    
</div>

<!-- Projects -->
<div id="projects" class="row">
	<div class="container">

	  <?php
	  $args = array( 'post_type' => 'projects','posts_per_page' => 3, 'orderby' => 'rand');
	  $loop = new WP_Query( $args );
	  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	  	
	  <div class="project">
		  
		<div class="col-md-5">
			<h2><?php echo get_field('client',$post->ID); ?></h2>
	        <h3 class="type"><?php echo get_field('project_type',$post->ID); ?></h3>
	        <h3 class="intro"><?php echo get_field('project_intro',$post->ID); ?></h3>
	        <p><a href="<?php echo get_field('website_link',$post->ID); ?>" target="_blank">View Website</a></p>
		</div>
	
	    <div class="col-md-7">
		    <img src="<?php echo get_field('image', $post->ID); ?>" />
	    </div>	
	
	  </div>
	
	  <?php endwhile; ?>
	  <?php wp_reset_query();?>

	</div>
</div>

<?php endwhile; ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
