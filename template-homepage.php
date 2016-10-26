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

<?php
	if ( have_rows('portfolio_left' ) || have_rows('portfolio_right' ) ):
?>

	<section id="homepage-portfolio">
		<div class="row collapse">

<?php
		// check if the repeater field has rows of data
		if( have_rows('portfolio_left') ):
?>

			<div class="medium-6 columns">

<?php
		 	// loop through the rows of data
		    while ( have_rows('portfolio_left') ) : the_row();
				$title = get_sub_field('title');
				$image = get_sub_field('image');
				$grid_layout = get_sub_field('grid_layout');
				$page_link = get_sub_field('page_link');
?>

				<div class="item <?php echo $grid_layout; ?>" style="background-image: url('<?php echo $image['url']; ?>');">
					<a href="">
						<div class="content">
							<span class="text"><?php echo $title; ?></span>
						</div>
					</a>
				</div>

<?php
		    endwhile;
?>

			</div>

<?php
		endif;

		// check if the repeater field has rows of data
		if( have_rows('portfolio_right') ):
?>

			<div class="medium-6 columns">

<?php
		 	// loop through the rows of data
		    while ( have_rows('portfolio_right') ) : the_row();
				$title = get_sub_field('title');
				$image = get_sub_field('image');
				$grid_layout = get_sub_field('grid_layout');
				$page_link = get_sub_field('page_link');
?>

				<div class="item <?php echo $grid_layout; ?>" style="background-image: url('<?php echo $image['url']; ?>');">
					<a href="">
						<div class="content">
							<span class="text"><?php echo $title; ?></span>
						</div>
					</a>
				</div>

<?php
		    endwhile;
?>

			</div>

<?php
		endif;
?>

		</div>
	</section>

<?php
	endif;
?>

	<!-- <section id="homepage-portfolio">
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
	</section> -->

<?php get_footer(); ?>
