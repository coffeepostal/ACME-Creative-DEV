<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-grid-' . get_sub_field('background_color') . '"';
	endif;
    $image_1 = get_sub_field('image_1');
    $image_2 = get_sub_field('image_2');
    $orientation = get_sub_field('orientation');
?>

<div id="portfolio-grid-two_photos" <?php echo $background_color; ?>>
    <div class="row">

<?php
    if( !empty($image_1) && !empty($image_2) ):
        if( $orientation == 'landscape' ):
?>

        <div class="medium-6 columns">
            <img src="<?php echo $image_1['sizes']['porfolio_landscape']; ?>" alt="<?php echo $image_1['alt']; ?>" />
        </div>
        <div class="medium-6 columns">
            <img src="<?php echo $image_2['sizes']['porfolio_landscape']; ?>" alt="<?php echo $image_2['alt']; ?>" />
        </div>

<?php
        elseif( $orientation == 'square' ):
?>

        <div class="medium-6 columns">
            <img src="<?php echo $image_1['sizes']['porfolio_square']; ?>" alt="<?php echo $image_1['alt']; ?>" />
        </div>
        <div class="medium-6 columns">
            <img src="<?php echo $image_2['sizes']['porfolio_square']; ?>" alt="<?php echo $image_2['alt']; ?>" />
        </div>

<?php
        elseif( $orientation == 'portrait' ):
?>

        <div class="medium-6 columns">
            <img src="<?php echo $image_1['sizes']['porfolio_portrait']; ?>" alt="<?php echo $image_1['alt']; ?>" />
        </div>
        <div class="medium-6 columns">
            <img src="<?php echo $image_2['sizes']['porfolio_portrait']; ?>" alt="<?php echo $image_2['alt']; ?>" />
        </div>

<?php
        elseif( $orientation == 'portland' ):
?>

        <div class="medium-4 columns">
            <img src="<?php echo $image_1['sizes']['porfolio_portrait']; ?>" alt="<?php echo $image_1['alt']; ?>" />
        </div>
        <div class="medium-8 columns">
            <img src="<?php echo $image_2['sizes']['porfolio_landscape']; ?>" alt="<?php echo $image_2['alt']; ?>" />
        </div>

<?php
        elseif( $orientation == 'landport' ):
?>

        <div class="medium-8 columns">
            <img src="<?php echo $image_1['sizes']['porfolio_landscape']; ?>" alt="<?php echo $image_1['alt']; ?>" />
        </div>
        <div class="medium-4 columns">
            <img src="<?php echo $image_2['sizes']['porfolio_portrait']; ?>" alt="<?php echo $image_2['alt']; ?>" />
        </div>

<?php
        endif;
    endif;
?>

    </div>
</div>
