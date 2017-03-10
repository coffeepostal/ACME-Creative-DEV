<?php
	//	Setup Feature Image Backgrounds
	$breakout_box_attachment = 'center';
	if ( has_post_thumbnail() ):
		$breakout_box_bg_image = get_post_thumbnail_id($post->ID);
		$breakout_box_small_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_small' )[0];
		$breakout_box_retina_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_retina' )[0];
		$breakout_box_medium_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_medium' )[0];
		$breakout_box_large_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_large' )[0];
		$breakout_box_xlarge_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_xlarge' )[0];
		$breakout_box_xxlarge_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_xxlarge' )[0];
		$breakout_box_portrait_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_portrait' )[0];
		$breakout_box_landscape_url = wp_get_attachment_image_src( $breakout_box_bg_image, 'feature_landscape' )[0];
	else:
		$breakout_box_bg_image = get_field('default_background_image', 'option');
		if( !empty($breakout_box_bg_image) ):
			$breakout_box_small_url = $breakout_box_bg_image['sizes']['feature_small'];
			$breakout_box_retina_url = $breakout_box_bg_image['sizes']['feature_retina'];
			$breakout_box_medium_url = $breakout_box_bg_image['sizes']['feature_medium'];
			$breakout_box_large_url = $breakout_box_bg_image['sizes']['feature_large'];
			$breakout_box_xlarge_url = $breakout_box_bg_image['sizes']['feature_xlarge'];
			$breakout_box_xxlarge_url = $breakout_box_bg_image['sizes']['feature_xxlarge'];
			$breakout_box_portrait_url = $breakout_box_bg_image['sizes']['feature_portrait'];
			$breakout_box_landscape_url = $breakout_box_bg_image['sizes']['feature_landscape'];
		endif;
	endif;
?>

<div id="<?php echo $portfolio_item_ID; ?>" class="row">
	<div class="medium-12 columns">
		<div class="breakout-box-item" data-interchange="[<?php echo $breakout_box_small_url; ?>, small],[<?php echo $breakout_box_retina_url; ?>, retina],[<?php echo $breakout_box_medium_url; ?>, medium],[<?php echo $breakout_box_large_url; ?>, large],[<?php echo $breakout_box_xlarge_url; ?>, xlarge],[<?php echo $breakout_box_xxlarge_url; ?>, xxlarge],[<?php echo $breakout_box_portrait_url; ?>, portrait],[<?php echo $breakout_box_landscape_url; ?>, landscape]" style="background-position: <?php echo $feature_image_attachment; ?>;">
			<div class="breakout-box-container">
				<div class="portolio-text">
					<div id="breakout-box-name" class="h1"><?php the_title(); ?></div>
					<p id="breakout-box-type" class="lead"><?php the_category( ', ' ); ?></p>
				</div>
				<a href="<?php the_permalink(); ?>" class="button breakout-box-link">View Post</a>
			</div>
		</div>
	</div>
</div>
