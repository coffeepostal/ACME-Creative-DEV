<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-' . get_sub_field('background_color') . '"';
	endif;
    $toggle = get_sub_field('single_photo_or_gallery');
    $single_photo = get_sub_field('single_photo');
    $gallery = get_field('gallery');
?>

<div id="portfolio-full_photo" <?php echo $background_color; ?>>

    <div class="row">
        <div class="medium-12 columns">

<?php
    if ( get_sub_field('text_overlay') ):
?>

            <div class="overlay">

<?php
    endif;

    if( $toggle == 'single' ):
        if( !empty($single_photo) ):
?>

            <img src="<?php echo $single_photo['sizes']['large']; ?>" alt="<?php echo $single_photo['alt']; ?>" />

<?php
        endif;
    elseif( $toggle == 'gallery' ):
        if( $gallery ):
?>
            <ul>

<?php
            foreach( $gallery as $image ):
?>

                <li>
                    <a href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <p><?php echo $image['caption']; ?></p>
                </li>

<?php
            endforeach;
?>

            </ul>
<?php
        endif;
    else:
        echo '	       <h1>What fresh hell is this?</h1>';
    endif;

    if ( get_sub_field('text_overlay') ):
?>

                <div class="overlay-content">
                    <p><?php echo get_sub_field('text_overlay_content'); ?></p>
                </div>

<?php
    endif;
?>

            </div>
        </div>
    </div>
</div>
