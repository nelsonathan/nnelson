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
	      <h2><?php echo get_field('introduction',$post->ID); ?></h2>
				<p><?php echo get_fiel('about', $post->ID); ?></p>
	    </div>
	</div>

<?php endwhile; ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
