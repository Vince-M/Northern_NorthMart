<?php 

function ncr_files() {
  wp_enqueue_script('ncr_script_js', get_theme_file_uri( '/dist/script.js'), NULL, '1.0', false );
  wp_enqueue_style( 'ncr_main_style', get_theme_file_uri('main.css') );
}

Add_action('wp_enqueue_scripts', 'ncr_files');



// this has to be the last function in the funtions.php file
function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );