<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

	<section id="call-to-action">
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'homepage' ); ?>

				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>

	<section id="homepage-portfolio">
		<div class="row collapse">
			<div class="medium-6 columns">
				<div class="item full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-in-bed-small.jpg');">
					<a href="">
						<div class="content">
							<span class="text">Full</span>
						</div>
					</a>
				</div>
				<div class="item square" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-nav-case-studies.jpg');">
					<div class="content">
						<span class="text">Square</span>
					</div>
				</div>
				<div class="item square" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-in-bed-small.jpg');">
					<div class="content">
						<span class="text">Square</span>
					</div>
				</div>
			</div>
			<div class="medium-6 columns">
				<div class="item wide-rect" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-nav-case-studies.jpg'); background-position: bottom;">
					<div class="content">
						<span class="text">Wide</span>
					</div>
				</div>
				<div class="item tall-rect" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-in-bed-small.jpg');">
					<div class="content">
						<span class="text">Tall</span>
					</div>
				</div>
				<div class="item square" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-nav-case-studies.jpg');">
					<div class="content">
						<span class="text">Square</span>
					</div>
				</div>
				<div class="item square" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-in-bed-small.jpg');">
					<div class="content">
						<span class="text">Square</span>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
