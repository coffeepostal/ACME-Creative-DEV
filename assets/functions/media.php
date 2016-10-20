<?php
    //  Add custom image sizes
    add_image_size( 'porfolio_portrait', 1140, 1710, true );
    add_image_size( 'porfolio_landscape', 1710, 1140, true );
    add_image_size( 'porfolio_square', 1140, 1140, true );

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
