<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-' . get_sub_field('background_color') . '"';
	endif;
    $image_1 = get_sub_field('image_1');
    $image_2 = get_sub_field('image_2');
    $orientation = get_sub_field('orientation');

	//	Change layout based on Orienation
	switch ($orientation) {
		case 'landscape':
			$image_01_classes = 'medium-6 columns';
			$image_01_image_size = 'porfolio_landscape';
			$image_02_classes = 'medium-6 columns';
			$image_02_image_size = 'porfolio_landscape';
			break;

		case 'square':
			$image_01_classes = 'medium-6 columns';
			$image_01_image_size = 'porfolio_square';
			$image_02_classes = 'medium-6 columns';
			$image_02_image_size = 'porfolio_square';
			break;

		case 'portrait':
			$image_01_classes = 'medium-6 columns';
			$image_01_image_size = 'porfolio_portrait';
			$image_02_classes = 'medium-6 columns';
			$image_02_image_size = 'porfolio_portrait';
			break;

		case 'portland':
			$image_01_classes = 'medium-4 columns';
			$image_01_image_size = 'porfolio_portrait';
			$image_02_classes = 'medium-8 columns';
			$image_02_image_size = 'porfolio_landscape';
			break;

		case 'landport':
			$image_01_classes = 'medium-8 columns';
			$image_01_image_size = 'porfolio_landscape';
			$image_02_classes = 'medium-4 columns';
			$image_02_image_size = 'porfolio_portrait';
			break;

		default:
			$image_01_classes = 'medium-6 columns';
			$image_01_image_size = 'porfolio_square';
			$image_02_classes = 'medium-6 columns';
			$image_02_image_size = 'porfolio_square';
			break;
	}
?>

<div id="portfolio-two_photos" <?php echo $background_color; ?>>
    <div class="row">

		<?php if( !empty($image_1) && !empty($image_2) ):?>

        <div class="<?php echo $image_01_classes; ?>">

			<?php if ( get_sub_field('text_overlay_01') ):?>

		    <div class="overlay">
				<img src="<?php echo $image_1['sizes'][$image_01_image_size]; ?>" alt="<?php echo $image_1['alt']; ?>" />
				<div class="overlay-content">
					<p><?php echo get_sub_field('text_overlay_content_01'); ?></p>
				</div>
			</div>

			<?php else: ?>

			<img src="<?php echo $image_1['sizes'][$image_01_image_size]; ?>" alt="<?php echo $image_1['alt']; ?>" />

			<?php endif; ?>

        </div>

        <div class="<?php echo $image_02_classes; ?>">

			<?php if ( get_sub_field('text_overlay_02') ): ?>

		    <div class="overlay">
				<img src="<?php echo $image_2['sizes'][$image_02_image_size]; ?>" alt="<?php echo $image_2['alt']; ?>" />
				<div class="overlay-content">
					<p><?php echo get_sub_field('text_overlay_content_02'); ?></p>
				</div>
			</div>

			<?php else: ?>

			<img src="<?php echo $image_2['sizes'][$image_02_image_size]; ?>" alt="<?php echo $image_2['alt']; ?>" />

			<?php endif; ?>

        </div>

		<?php endif; ?>

    </div>
</div>
