<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    //  jQuery UI 1.11.3
    wp_enqueue_script('jquery-ui','https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', array('jquery'), '1.11.3');

    // Adding app.js file in the footer
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery', 'jquery-ui'), '', true );

    // PhotoSwipe is an incredibly featured lightboxing script.
    wp_enqueue_script( 'photoswipe', get_template_directory_uri() . '/assets/js/scripts/min/photoswipe-min.js', array(), '4.1.1', false );
    wp_enqueue_script( 'photoswipe-ui-default', get_template_directory_uri() . '/assets/js/scripts/min/photoswipe-ui-default-min.js', array(), '4.1.1', false );
    wp_enqueue_script( 'photoswipe-settings', get_template_directory_uri() . '/assets/js/scripts/min/photoswipe-settings-min.js', array(), '4.1.1', true );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
