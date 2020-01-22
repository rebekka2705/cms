<?php

function enqueue_scripts_and_styles() {
  wp_enqueue_style( 'main-styles', get_template_directory_uri().'/<%=htmlWebpackPlugin.files.chunks.main.css %>', array(), false, 'all');
 
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/<%=htmlWebpackPlugin.files.chunks.main.entry %>', array (), null, false);
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

?>