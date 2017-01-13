<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

<?php
	//	Portfolio Grid
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
				$title = get_sub_field('new_link');
				$image = get_sub_field('image');
				$grid_layout = get_sub_field('grid_layout');
				$page_link = get_sub_field('page_link');
?>

				<div class="item <?php echo $grid_layout; ?>" style="background-image: url('<?php echo $image['url']; ?>');">
					<a href="<?php echo $page_link; ?>">
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
					<a href="<?php echo $page_link; ?>">
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

	//	Call-to-Action Section
	if(get_field('call_to_action_onoff')):
?>

	<section id="call-to-action">
		<div class="row">
			<div class="medium-10 medium-centered columns">

				<?php the_field('call_to_action_content'); ?>

			</div>
		</div>
	</section>

<?php
	//	End Call-to-Action if section
	endif;
?>

<?php get_footer(); ?>
