<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-' . get_sub_field('background_color') . '"';
	endif;
    $toggle = get_sub_field('single_photo_or_gallery');
    $single_photo = get_sub_field('single_photo');
    $gallery = get_field('gallery');
?>

<div id="portfolio-full_photo" <?php echo $background_color; ?>>

	<div class="overlay">
		<p>Nulla facilisi. Suspendisse molestie elit dapibus gravida ultricies. Donec non bibendum libero. Integer et leo euismod, mattis libero vitae, fringilla lorem. Suspendisse aliquam quis nulla a porttitor. Nullam luctus metus ultricies dolor sodales tincidunt. Morbi aliquet nisi id risus vulputate aliquam.</p>
	</div>

    <div class="row">
        <div class="medium-12 columns">

<?php
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
?>
        </div>
    </div>
</div>
