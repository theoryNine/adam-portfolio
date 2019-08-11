<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 add_action( 'after_setup_theme', 'theme_functions' );
function theme_functions() {

    add_theme_support( 'title-tag' );

}

add_filter( 'wp_title', 'custom_titles', 10, 2 );
function custom_titles( $title, $sep ) {

    //Check if custom titles are enabled from your option framework
    if ( ot_get_option( 'enable_custom_titles' ) === 'on' ) {
        //Some silly example
        $title = "Some other title" . $title;;
    }

    return $title;
}

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

 ?>