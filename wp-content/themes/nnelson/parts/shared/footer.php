	<footer itemscope itemtype="http://schema.org/WPFooter">
		<div class="container">

			<h2>Contact</h2>
			<h3>Got a project in mind? Get in touch and we can have a chat.</h3>

			<div class="form">
				<?php echo do_shortcode('[contact-form-7 id="39" title="Contact"]'); ?>
			</div>

			<div class="social">
				<ul>

					<?php if( have_rows('social_icons','option') ): ?>
					<?php while ( have_rows('social_icons','option') ) : the_row(); ?>

					  <li>
							<a href="<?php the_sub_field('link'); ?>">
								<p><?php the_sub_field('icon'); ?></p>
							</a>
						</li>

				  <?php endwhile;
					else :
					    // no rows found
					endif; ?>

				</ul>
			</div>

			<p>
				<a href="<?php site_url(); ?>/">Home</a></span>
				<span>|</span>
				<a href="<?php site_url(); ?>/#about">About</a>
				<span>|</span>
				<a href="<?php site_url(); ?>/projects">Projects</a>
			</p>

		</div>
	</footer>

	<div class="credit">
		<div class="container">

				<p><i class="fa fa-code" aria-hidden="true"></i> Designed &amp; Developed by Nathan Nelson<br />&copy; <?php echo date("Y"); ?> Nathan Nelson. All rights reserved.</p>

		</div>
	</div>
