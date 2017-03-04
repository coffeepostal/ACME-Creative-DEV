<!-- START: content-block-image_content_width.php -->

<?php
    $image = get_sub_field('image');
?>

<div id="image_content_width">
    <div class="row">
        <div class="medium-12 columns">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>
</div>

<!-- END: content-block-image_content_width.php -->
