<?php
/*
  Template Name: Homepage
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- About -->
<div id="bio" class="row">

	<div class="col-md-6">
    <div class="container">
      <h2><?php echo get_field('introduction',$post->ID); ?></h2>
			<p><a href="<?php site_url(); ?>/about">Want to know more?</a></p>
    </div>
  </div>

	<div class="col-md-6" style="background-image:url('<?php echo get_field('profile_image',$post->ID); ?>'); background-size:cover; background-position:center center;"></div>

</div>

<!-- Featured Projects -->
<div id="featured" class="row">

  <?php
  $args = array( 'post_type' => 'projects','posts_per_page' => 3, 'orderby' => 'rand');
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

  <div class="project">

    <div class="col-md-6 left" style="background-image:url('<?php echo get_field('image', $post->ID); ?>'); background-size:cover; background-position:center center;"></div>

    <div class="col-md-6">
      <div class="container">

        <h2><?php echo get_field('client',$post->ID); ?></h2>
        <h3><?php echo get_field('project_type',$post->ID); ?></h3>
        <p><a href="<?php echo get_field('website_link',$post->ID); ?>">View Website</a></p>

      </div>
    </div>

    <div class="col-md-6 right" style="background-image:url('<?php echo get_field('image', $post->ID); ?>'); background-size:cover; background-position:center center;"></div>

  </div>

  <?php endwhile; ?>
  <?php wp_reset_query();?>


</div>

<div id="allprojects" class="row">
	<div class="container">

		<h2>
			<a href="<?php site_url(); ?>/projects">View All Projects</a>
		</h2>

	</div>
</div>

<?php endwhile; ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
