<?php

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//	Change Login Logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/acme-admin-icon.svg);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/** Get blog posts page URL.
 *  @return string The blog posts page URL.*/
function km_get_blog_posts_page_url() {

	// If front page is set to display a static page, get the URL of the posts page.
	if ( 'page' === get_option( 'show_on_front' ) ) {
		return get_permalink( get_option( 'page_for_posts' ) );
	}

	// The front page IS the posts page. Get its URL.
	return get_home_url();
}


//	Tweak Archive Title Format
add_filter( 'get_the_archive_title', function ( $title ) {
    if ( is_category() ) {
		$title = sprintf( __( '<small>Category:</small> %s' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( __( '<small>Tag:</small> %s' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( __( '<small>Author:</small> %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( __( '<small>Year:</small> %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( '<small>Month:</small> %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( '<small>Day:</small> %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
	}

    return $title;
});
