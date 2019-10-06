<?php

add_action('admin_enqueue_scripts', 'enqueue_qrcode_main_scripts');

function enqueue_qrcode_main_scripts() {
  // Scripts

  foreach( glob( __DIR__ . '/dist/js/*.js' ) as $script ) {
    $script = basename( $script );
    $name = explode( '.', $script, 2 )[0];
    $url = plugin_dir_url( __FILE__ ) . 'dist/js/' . $script;

    wp_enqueue_script( $name, $url, null, null, true );
  }

  // Styles
  foreach( glob( __DIR__ . '/dist/css/*.css' ) as $style ) {
    $style = basename( $style );
    $name = explode( '.', $style, 2 )[0];
    $url = plugin_dir_url( __FILE__ ) . 'dist/css/' . $style;

    wp_register_style( $name, $url, false, '1.0.0' );
    wp_enqueue_style( $name );
  }
}