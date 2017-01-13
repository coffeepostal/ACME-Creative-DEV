<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-grid-' . get_sub_field('background_color') . '"';
	endif;
    $image = get_sub_field('image');
    $text = get_sub_field('text');
    $orientation = get_sub_field('orientation');
?>

<div id="portfolio-grid-image_text" <?php echo $background_color; ?>>
    <div class="row">

<?php
    if( !empty($image) && !empty($text) ):
        if( $orientation == 'it' ):
?>

        <div class="medium-6 columns">
            <img src="<?php echo $image['sizes']['porfolio_landscape']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <div class="medium-6 columns">

            <?php echo $text; ?>

        </div>

<?php
        elseif( $orientation == 'ti' ):
?>

        <div class="medium-6 columns">

            <?php echo $text; ?>

        </div>
        <div class="medium-6 columns">
            <img src="<?php echo $image['sizes']['porfolio_landscape']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>

<?php
        endif;
    endif;
?>

    </div>
</div>
