<?php

add_action('wp_loaded', 'when_loaded');

function when_loaded() {
  add_action('wp_enqueue_scripts', 'enqueue_qrcode_main_scripts');
}

function enqueue_qrcode_main_scripts() {
  foreach( glob( __DIR__ . '/../dist/js/*.js' ) as $script ) {
    $script = basename( $script );
    $name = explode( '.', $script, 2 )[0];
    $url = plugin_dir_url( __FILE__ ) . 'dist/js/' . $script;

    wp_enqueue_script( $name, $url, null, null, true );
  }

  foreach( glob( __DIR__ . '/../dist/css/*.css' ) as $style ) {
    $style = basename( $style );
    $name = explode( '.', $style, 2 )[0];
    $url = plugin_dir_url( __FILE__ ) . 'dist/css/' . $style;

    wp_enqueue_style( $name, $url, null, null, null );
  }
}