<!-- START: content-block-image_split_content_width.php -->

<?php
    $image_left = get_sub_field('image_left');
    $image_right = get_sub_field('image_right');
?>

<div id="image_split_content_width">
    <div class="row">
        <div id="left" class="medium-6 columns">
            <img src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>">
        </div>
        <div id="right" class="medium-6 columns">
            <img src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>">
        </div>
    </div>
</div>

<!-- END: content-block-image_split_content_width.php -->
