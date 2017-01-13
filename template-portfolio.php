<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

<?php
	// check if the repeater field has rows of data
	if( have_rows('portfolio') ):
		$portfolio_loop_number = 0;
?>

	<div id="portfolio">

<?php
	 	// loop through the rows of data
	    while ( have_rows('portfolio') ) : the_row();
			$section_name	= get_sub_field('name');

			//Lower case everything
		    $section_ID = strtolower($section_name);
		    //Make alphanumeric (removes all other characters)
		    $section_ID = preg_replace("/[^a-z0-9_\s-]/", "", $section_ID);
		    //Clean up multiple dashes or whitespaces
		    $section_ID = preg_replace("/[\s-]+/", " ", $section_ID);
		    //Convert whitespaces and underscore to dash
		    $section_ID = preg_replace("/[\s_]/", "-", $section_ID);

			//	Section Title Underline Length
			switch ($portfolio_loop_number) {
			    case 0:
			        $portfolio_section_title_classes = 'medium-3 columns title';
			        break;
			    case 1:
			        $portfolio_section_title_classes = 'medium-6 columns title';
			        break;
			    case 2:
			        $portfolio_section_title_classes = 'medium-9 columns title';
			        break;
				case 3:
			        $portfolio_section_title_classes = 'medium-12 columns title';
			        break;
				default:
					$portfolio_section_title_classes = 'medium-3 columns title';
			}

			$portfolio_loop_number++;
?>

		<div id="<?php echo $section_ID; ?>" class="portfolio-section">
			<div class="row">
				<div class="<?php echo $portfolio_section_title_classes; ?>">
					<h3><?php echo $section_name; ?></h3>
				</div>
			</div>

<?php

	// check if the repeater field has rows of data
	if( have_rows('portfolio_items') ):

	 	// loop through the rows of data
	    while ( have_rows('portfolio_items') ) : the_row();
			$portfolio_item_name				= get_sub_field('name');

			//Lower case everything
			$portfolio_item_ID = strtolower($portfolio_item_name);
			//Make alphanumeric (removes all other characters)
			$portfolio_item_ID = preg_replace("/[^a-z0-9_\s-]/", "", $portfolio_item_ID);
			//Clean up multiple dashes or whitespaces
			$portfolio_item_ID = preg_replace("/[\s-]+/", " ", $portfolio_item_ID);
			//Convert whitespaces and underscore to dash
			$portfolio_item_ID = preg_replace("/[\s_]/", "-", $portfolio_item_ID);

			$portfolio_item_type				= get_sub_field('type');
			$portfolio_item_link				= get_sub_field('link');

			$portfolio_item_background_image	= get_sub_field('background_image');

			if( !empty($portfolio_item_background_image) ):
				$portfolio_item_background_image_small	= $portfolio_item_background_image['sizes'][ 'large' ];
				$portfolio_item_background_image_medium	= $portfolio_item_background_image['sizes'][ 'large' ];
				$portfolio_item_background_image_large	= $portfolio_item_background_image['sizes'][ 'large' ];
			endif;
?>

			<div id="<?php echo $portfolio_item_ID; ?>" class="row">
				<div class="medium-12 columns">
					<div class="portfolio-item" data-interchange="[<?php echo $portfolio_item_background_image_small; ?>, small], [<?php echo $portfolio_item_background_image_medium; ?>, medium], [<?php echo $portfolio_item_background_image_large; ?>, large]">
						<div class="portfolio-container">
							<div class="portolio-text">
								<div id="portfolio-name" class="h1"><?php echo $portfolio_item_name; ?></div>
								<p id="portfolio-type" class="lead"><?php echo $portfolio_item_type; ?></p>
							</div>
							<a href="<?php echo $portfolio_item_link; ?>" class="button portfolio-link">View Case Study</a>
						</div>
					</div>
				</div>
			</div>

<?php
	        // display a sub field value
	        the_sub_field('sub_field_name');

	    endwhile;
	endif;
?>

		</div>

<?php
	    endwhile;
?>

	</div>

<?php
	endif;
?>

<?php get_footer(); ?>
