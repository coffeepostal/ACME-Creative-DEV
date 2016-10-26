<header id="site-header">
	<div id="logo">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ACME.jpg" alt="ACME Creative Logo"></a>
	</div>
	<div id="navControl">
		<div id="navClick">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span id="navText" class="work-with-us-launch"><a href="">Work With Us</a></span>
	</div>
</header>

<nav id="acme">
	<div id="container">
		<div id="navigation">
			<?php joints_acme_nav(); ?>
		</div>

<?php
	// Set background image
	$background_image = get_field('background_image', 'option');

	// Check to see if both the case studies IS active AND there are case studies to display
	if ( get_field('case_studies_active', 'option') && have_rows('case_studies', 'option') ):
		$case_study_count = count(get_field('case_studies', 'option'));
		$case_study_height = 100 / $case_study_count;
?>

		<div id="case-studies">

<?php
		// Loop through the case studies
		while ( have_rows('case_studies', 'option') ) : the_row();

			$background_image = get_sub_field('background_image');
			$page_link = get_sub_field('link');
?>

			<div id="case-study-01" class="case-study" style="height: <?php echo $case_study_height; ?>%; background-image: url('<?php echo $background_image['url']; ?>');">
				<a href="<?php echo $page_link; ?>">
					<div class="container">
						<div class="content">
							<h2><?php the_sub_field('title'); ?></h2>
							<?php the_sub_field('content'); ?>
						</div>
					</div>
				</a>
			</div>

<?php
		endwhile;

	//	If there IS a background image, BUT there are either NO case studies or they're turned OFF
	elseif ( !empty($background_image) ):

		$background_image_url = $background_image['sizes']['large'];
		$background_alignment = get_field('background_alignment', 'option')
?>

		<div id="case-studies" style="background-image: url('<?php echo $background_image_url; ?>'); background-position: <?php echo $background_alignment; ?>;">

<?php
	//	If there's NO background image AND there are either NO case studies or they're turned OFF
	else:
?>

		<div id="case-studies">

<?php
	endif;
?>

		</div>
	</div>
</nav>
