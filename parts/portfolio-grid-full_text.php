<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-grid-' . get_sub_field('background_color') . '"';
	endif;
?>

<div id="portfolio-grid-full_text" <?php echo $background_color; ?>>
    <div class="row">
        <div class="medium-12 columns">

<?php
    if( get_sub_field('title') ):
        echo '            <h2>' . get_sub_field('title') . '</h2>';
    endif;

    if( get_sub_field('content') ):
        echo get_sub_field('content');
    endif;
?>

        </div>
    </div>
</div>
