<?php 

function ncr_files() {
  wp_enqueue_script('ncr_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', true);
  wp_enqueue_script('bodyScrollLock', get_stylesheet_directory_uri() . '/dist/bodyScrollLock.min.js', NULL, '1.0', true);
  wp_enqueue_style( 'ncr_main_style', get_theme_file_uri('main.css') );
}

Add_action('wp_enqueue_scripts', 'ncr_files');

function ncr_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerAboutLocation', 'Footer About Location');
  register_nav_menu('footerServicesLocation', 'Footer Services Location');
  register_nav_menu('footerHealthyHorizonsLocation', 'Footer Healthy Horizons Location');
  register_nav_menu('footerCommunityLocation', 'Footer Community Location');
  register_nav_menu('footerSiteNavigation', 'Footer Site Navigation');

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'automatic-feed-links' );
}

add_action('after_setup_theme', 'ncr_features', 0);

// add_filter( 'show_admin_bar', '__return_false' );

function wpshock_search_filter( $query ) {
  if ( $query->is_search ) {
        $query->set( 'post_type', array('post','page') );
    }
  return $query;
}
add_filter('pre_get_posts','wpshock_search_filter');

if ( ! function_exists( 'wp_body_open' ) ) {
  function wp_body_open() {
    do_action( 'wp_body_open' );
  }
}

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	</div>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );


// this has to be the last function in the funtions.php file
function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );