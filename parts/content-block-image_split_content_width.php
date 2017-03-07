<!-- START: content-block-image_split_content_width.php -->

<?php
    $image_left = get_sub_field('image_left');
    $caption_left = get_sub_field('caption_left');
    $image_right = get_sub_field('image_right');
    $caption_right = get_sub_field('caption_right');
?>

<div id="content-block image_split_content_width">
    <div class="row">
        <div id="left" class="medium-6 columns">
            <img src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>">
<?php
    if($caption_left):
?>

            <p class="caption"><?php echo $caption_left; ?></p>

<?php
    endif;
?>
        </div>
        <div id="right" class="medium-6 columns">
            <img src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>">
<?php
    if($caption_right):
?>

            <p class="caption"><?php echo $caption_right; ?></p>

<?php
    endif;
?>
        </div>
    </div>
</div>

<!-- END: content-block-image_split_content_width.php -->
