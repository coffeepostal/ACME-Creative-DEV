<!-- START: content-block-image_content_width.php -->

<?php
    $image = get_sub_field('image');
    $caption = get_sub_field('caption');
?>

<div id="image_content_width">
    <div class="row">
        <div class="medium-12 columns">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>

<?php
    if($caption):
?>

    <div class="row">
        <div class="medium-12 columns">
            <p class="caption"><?php echo $caption; ?><</p>
        </div>
    </div>

<?php
    endif;
?>

</div>

<!-- END: content-block-image_content_width.php -->
