<?php
/*
  Template Name: Projects
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- Intro -->
<div id="intro" class="row">

	<div class="col-md-6">
    <div class="container">
			<h2>Projects</h2>
      <h3><?php echo get_field('introduction',$post->ID); ?></h3>
    </div>
  </div>

	<div class="col-md-6" style="background-image:url('<?php echo get_field('header_image',$post->ID); ?>'); background-size:cover; background-position:center center;"></div>

</div>

<!-- Projects -->
<div id="projects" class="row">

  <?php
  $args = array( 'post_type' => 'projects');
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

<?php endwhile; ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
