<?php
    //  Add custom image sizes
    add_image_size( 'porfolio_portrait', 1140, 1710, true );
    add_image_size( 'porfolio_landscape', 1710, 1140, true );
    add_image_size( 'porfolio_square', 1140, 1140, true );

	//	Feature Image Sizes
	add_image_size( 'feature_small', 640, 640, true );
	add_image_size( 'feature_retina', 1280, 1280, true );
	add_image_size( 'feature_medium', 1024, 1024, true );
	add_image_size( 'feature_large', 1200, 1200, true );
	add_image_size( 'feature_xlarge', 1440, 1440, true );
	add_image_size( 'feature_xxlarge', 1920, 1920, true );
	add_image_size( 'feature_portrait', 1920, 1080, true );
	add_image_size( 'feature_landscape', 1080, 1920, true );

    add_filter('image_size_names_choose', 'my_image_sizes');
    function my_image_sizes($sizes) {
        $addsizes = array(
            "porfolio_portrait" => __( "Porfolio: Portrait"),
            "porfolio_landscape" => __( "Porfolio: Landscape"),
            "porfolio_square" => __( "Porfolio: Square")
        );
        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
    }
