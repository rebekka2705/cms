<?php

function enqueue_scripts_and_styles() {
  wp_enqueue_style( 'main-styles', get_template_directory_uri().'/main.265576cd1211c0ce4f2f.css?70023e1d5515aad21803', array(), false, 'all');
 
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/main.js?70023e1d5515aad21803', array (), null, false);
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

?>