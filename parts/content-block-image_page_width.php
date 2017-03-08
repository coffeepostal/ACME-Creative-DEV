<!-- START: content-block-image_page_width.php -->

<?php
    $image = get_sub_field('image');
    $caption = get_sub_field('caption');
?>

<div class="content-block image_page_width">
    <div class="row expanded">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>

<?php
    if($caption):
?>

    <div class="row expanded">
        <div class="medium-12 columns">
            <p class="caption"><?php echo $caption; ?></p>
        </div>
    </div>

<?php
    endif;
?>

</div>

<!-- END: content-block-image_page_width.php -->
