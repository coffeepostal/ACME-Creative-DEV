<?php
	switch (get_row_layout()) {
		case 'content_content_width':
			get_template_part( 'parts/content-block', 'content_content_width' );
			break;

		case 'content_split_content':
			get_template_part( 'parts/content-block', 'content_split_content' );
			break;

		case 'image_content_width':
			get_template_part( 'parts/content-block', 'image_content_width' );
			break;

		case 'image_page_width':
			get_template_part( 'parts/content-block', 'image_page_width' );
			break;

		case 'image_split_content_width':
			get_template_part( 'parts/content-block', 'image_split_content_width' );
			break;

		default:
			echo "<h1>NO! That's not a real selection, how did you do that?</h1>";
			break;
	}
?>
