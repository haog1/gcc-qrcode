<?php

add_action( 'admin_menu', 'add_admin_menu' );

/**
 * Adds a the new item to the admin menu.
 */
function add_admin_menu() {
  add_submenu_page( 'tools.php', 'QR Code Generator', 'QR Code Generator', 'manage_options', 'tools.php?page=qr-code-generator', 'render_admin_panel' );
}

function render_admin_panel() {
  echo '<div class="wrapper">';
  echo '<h1>QR Code Generator</h1>';
  echo '</div>';
}

function generateQRCode( $data ) {
  if( !$data ) {
    return;
  }
  // QRcode::png( $data );
}
