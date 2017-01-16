<?php
/*
Template Name: Portfolio Item
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

	<div id="portfolio">

<?php
	// check if the flexible content field has rows of data
	if( have_rows('content_blocks') ):

	     // loop through the rows of data
	    while ( have_rows('content_blocks') ) : the_row();

			//	Set variables and show layout file based on selected layout
			if( get_row_layout() == 'full_photo' ):
				include( locate_template('parts/portfolio-full_photo.php') );
			elseif( get_row_layout() == 'two_photos'):
				$orientation = get_sub_field('orientation');
				$image_1 = get_sub_field('image_1');
				$image_2 = get_field('image_2');
				include( locate_template('parts/portfolio-two_photos.php') );
			elseif( get_row_layout() == 'full_text'):
				$title = get_sub_field('title');
				$content = get_sub_field('content');
				include( locate_template('parts/portfolio-full_text.php') );
			elseif( get_row_layout() == 'image_text'):
				$orientation = get_sub_field('orientation');
				$text = get_sub_field('text');
				$image = get_field('image');
				include( locate_template('parts/portfolio-image_text.php') );
			elseif( get_row_layout() == 'quote'):
				$quote = get_sub_field('quote');
				$attribution = get_sub_field('attribution');
				include( locate_template('parts/portfolio-quote.php') );
			else:
				get_template_part( 'parts/portfolio', 'missing' );
			endif;

	    endwhile;

	else :

	    get_template_part( 'parts/portfolio', 'missing' );

	endif;
?>

	</div>

<?php get_footer(); ?>
