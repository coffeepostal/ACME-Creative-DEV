<?php get_header(); ?>

<?php
	// Setup the Query for the Feature
	$feature_args = array( 'posts_per_page' => 1 );
	$feature_query = new WP_Query( $feature_args );

	if ( $feature_query->have_posts() ) :

	// pagination here

		while ( $feature_query->have_posts() ) : $feature_query->the_post();

			//	Setup Feature Image Backgrounds
			$breakout_box_attachment = 'center';
			if ( has_post_thumbnail() ):
				$breakout_box_bg_image = get_post_thumbnail_id($post->ID);
				$feature_image_small_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_small' )[0];
				$feature_image_retina_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_retina' )[0];
				$feature_image_medium_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_medium' )[0];
				$feature_image_large_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_large' )[0];
				$feature_image_xlarge_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_xlarge' )[0];
				$feature_image_xxlarge_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_xxlarge' )[0];
				$feature_image_portrait_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_portrait' )[0];
				$feature_image_landscape_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_landscape' )[0];
			else:
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
			endif;

			//	Setup Feature Image Backgrounds
			$feature_image_attachment = 'center';
			if ( has_post_thumbnail() ):
				$feature_image_small_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' )[0];
				$feature_image_retina_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'retina' )[0];
				$feature_image_medium_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' )[0];
				$feature_image_large_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' )[0];
				$feature_image_xlarge_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'xlarge' )[0];
				$feature_image_xxlarge_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'xxlarge' )[0];
				$feature_image_portrait_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'portrait' )[0];
				$feature_image_landscape_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'landscape' )[0];
			endif;
?>

<section id="feature" data-interchange="[<?php echo $feature_image_small_url; ?>, small], [<?php echo $feature_image_retina_url; ?>, retina], [<?php echo $feature_image_medium_url; ?>, medium], [<?php echo $feature_image_large_url; ?>, large], [<?php echo $feature_image_xlarge_url; ?>, xlarge], [<?php echo $feature_image_xxlarge_url; ?>, xxlarge], [<?php echo $feature_image_portrait_url; ?>, portrait], [<?php echo $feature_image_landscape_url; ?>, landscape]" style="background-position: <?php echo $feature_image_attachment; ?>;">
	<div class="feature-container single">
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<h2><?php the_category( ', ' ); ?></h2>
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<?php
		endwhile;

	// pagination here

	wp_reset_postdata();

	endif;
?>

			</div>
		</div>
	</div>
</section>

<div id="news" class="breakout-box-section">

	<div class="row">
		<div class="medium-3 columns end title">
			<h3>More Posts</h3>
		</div>
	</div>

</div>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

				<?php get_template_part( 'parts/loop', 'content-blocks' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
