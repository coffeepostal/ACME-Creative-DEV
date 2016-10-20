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
			<!-- <ul id="navigationContainer">
				<li>Work With Us</li>
				<li>Who We Are</li>
				<li>What We Do</li>
				<li>Our Portfolio</li>
				<li>Contact Us</li>
				<li>News</li>
			</ul> -->
		</div>

<?php
	$background_image = get_field('background_image', 'option');

	if( !empty($background_image) ):
		$background_image_url = $background_image['url'];
		$background_image_size = 'large';
?>
		<div id="case-studies" style="background-image: url('<?php echo $background_image['sizes'][ $background_image_size ]; ?>'); background-position: <?php the_field('background_alignment', 'option'); ?>;">
<?php else: ?>
		<div id="case-studies">
<?php endif; ?>

<?php
	if(get_field('case_studies_active', 'option')):

		// check if the repeater field has rows of data
		if( have_rows('case_studies', 'option') ):

			$case_study_count = count(get_field('case_studies', 'option'));
			$case_study_height = 100 / $case_study_count;

			// loop through the rows of data
			while ( have_rows('case_studies', 'option') ) : the_row();
?>
			<div id="case-study-01" class="case-study" style="height: <?php echo $case_study_height; ?>%;">
				<h2><?php the_sub_field('title'); ?></h2>
				<?php the_sub_field('content'); ?>
			</div>
<?php
			endwhile;
		endif;
	endif;
?>
		</div>
	</div>
</nav>
