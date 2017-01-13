<?php
	$feature_image_small = get_field('feature_image_small');
	$feature_image_medium = get_field('feature_image_medium');
	$feature_image_large = get_field('feature_image_large');

	if( !empty($feature_image_small) ):
		$feature_image_small_url = $feature_image_small['url'];
	endif;
	if( !empty($feature_image_medium) ):
		$feature_image_medium_url = $feature_image_medium['url'];
	endif;
	if( !empty($feature_image_large) ):
		$feature_image_large_url = $feature_image_large['url'];
	endif;
?>

	<section id="feature" data-interchange="[<?php echo $feature_image_small_url; ?>, small], [<?php echo $feature_image_medium_url; ?>, medium], [<?php echo $feature_image_large_url; ?>, large]" style="background-position: <?php the_field('image_attachment'); ?>;">
		<div class="row">
			<div class="medium-10 medium-centered columns">
<?php
	if(get_field('feature_content')):
		echo '				';
		the_field('feature_content');
	endif;
?>
				&nbsp;
			</div>
		</div>
<?php
	if(get_field('jump_links_onoff')):
		// check if the repeater field has rows of data
		if( have_rows('jump_links') ):

			//	Count the Jump Links and Chnage the Layout depending on how many there are
			$jump_links = get_field('jump_links');
			$jump_link_count = count($jump_links);

			switch ($jump_link_count) {
			    case 1:
			        $jump_link_classes = 'medium-3 medium-centered columns text-center';
			        break;
			    case 2:
			        $jump_link_classes = 'medium-6 columns text-center';
			        break;
				case 3:
			        $jump_link_classes = 'medium-4 columns text-center';
			        break;
				default:
					$jump_link_classes = 'medium-3 columns text-center';
			}
?>
		<div id="jump-links" class="row hide-for-small-only">
<?php
			while ( have_rows('jump_links') ) : the_row();
?>
			<div class="<?php echo $jump_link_classes;">
				<a href="#<?php the_sub_field('section_id'); ?>">
					<h3><?php the_sub_field('link_text'); ?></h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-arrow_down.png" alt="Take me to: <?php the_sub_field('section_id'); ?>">
				</a>
			</div>
<?php
			endwhile;
?>
		</div>
<?php
		endif;
	endif;
?>
	</section>
