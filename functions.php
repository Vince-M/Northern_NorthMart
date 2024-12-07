<?php 

function ncr_files() {
  wp_enqueue_script('ncr_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false);
  wp_enqueue_script('bodyScrollLock', get_stylesheet_directory_uri() . '/dist/bodyScrollLock.min.js', NULL, '1.0', false);
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
}

add_action('after_setup_theme', 'ncr_features');

add_filter( 'show_admin_bar', '__return_false' );



// this has to be the last function in the funtions.php file
function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );