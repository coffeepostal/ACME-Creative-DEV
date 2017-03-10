<?php get_header(); ?>

<?php
	//	Setup Feature Image Backgrounds
	$breakout_box_bg_image = get_field('default_background_image', 'option');
	if( !empty($breakout_box_bg_image) ):
		$feature_image_small_url = $breakout_box_bg_image['sizes']['feature_small'];
		$feature_image_retina_url = $breakout_box_bg_image['sizes']['feature_retina'];
		$feature_image_medium_url = $breakout_box_bg_image['sizes']['feature_medium'];
		$feature_image_large_url = $breakout_box_bg_image['sizes']['feature_large'];
		$feature_image_xlarge_url = $breakout_box_bg_image['sizes']['feature_xlarge'];
		$feature_image_xxlarge_url = $breakout_box_bg_image['sizes']['feature_xxlarge'];
		$feature_image_portrait_url = $breakout_box_bg_image['sizes']['feature_portrait'];
		$feature_image_landscape_url = $breakout_box_bg_image['sizes']['feature_landscape'];
	endif;

	//	Setup Feature Image Backgrounds
	$feature_image_attachment = 'center';
?>

<section id="feature" data-interchange="[<?php echo $feature_image_small_url; ?>, small], [<?php echo $feature_image_retina_url; ?>, retina], [<?php echo $feature_image_medium_url; ?>, medium], [<?php echo $feature_image_large_url; ?>, large], [<?php echo $feature_image_xlarge_url; ?>, xlarge], [<?php echo $feature_image_xxlarge_url; ?>, xxlarge], [<?php echo $feature_image_portrait_url; ?>, portrait], [<?php echo $feature_image_landscape_url; ?>, landscape]" style="background-position: <?php echo $feature_image_attachment; ?>;">
	<div class="feature-container overlay">
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<h1 class="page-title"><?php the_archive_title();?></h1>
				<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
			</div>
		</div>
	</div>
</section>

<section id="categories">
	<div class="row">
		<div class="medium-12 columns">

<?php
	$current_category = single_cat_title("", false);

	$categories = get_categories( array(
	    'orderby' => 'name',
	    'parent'  => 0
	) );

	echo '			<h3 class="text-center">';

	$category_list = array();
	foreach ( $categories as $category ) {
		$loop_category = $category->name;

		if( $loop_category == $current_category ):
			$category_list[] = '<span class="active">' . $loop_category . '</span> ';
		else:
			$category_list[] = '<a href="' . get_category_link( $category->term_id ) . '">' . $loop_category . '</a> ';
		endif;
	}

	echo implode( ', ', $category_list );

	echo '</h3>'
?>

		</div>
	</div>
</section>

<div id="news" class="breakout-box-section">

	<div class="row">
		<div class="medium-3 columns end title">
			<h3>The Posts</h3>
		</div>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'parts/loop', 'archive' ); ?>

	<?php endwhile; ?>

		<?php joints_page_navi(); ?>

	<?php else : ?>

		<?php get_template_part( 'parts/content', 'missing' ); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
