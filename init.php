<?php

add_action( 'admin_menu', 'add_admin_menu' );

/**
 * Adds a the new item to the admin menu.
 */
function add_admin_menu() {
  add_submenu_page( 'tools.php', 'QR Code Generator', 'QR Code Generator', 'manage_options', 'tools.php?page=qr-code-generator', 'render_admin_panel' );
}

function render_admin_panel() {
  ?>
  <div class="wrapper">
    <h1 class="title">Generate QR Code</h1>
    <h2 class="sub-title">Choose a Post Type</h2>
    <form action="/generate-qr-code">
      <select id="generate-qr-code-selector" required="true">
        <option value="">Please choose a type</option>
        <?php
          foreach(get_post_types() as $value => $name ) {
            if( $value != 'nav_menu_item' &&
                $value != 'acf-field' &&
                $value != 'acf-field-group' &&
                $value != 'schema' &&
                $value != 'wp_block' &&
                $value != 'user_request' &&
                $value != 'customize_changeset' &&
                $value != 'custom_css' &&
                $value != 'calendar' &&
                $value != 'oembed_cache' &&
                $value != 'revision' ) {
              echo '<option value="' . $value . '">' . $name . '</option>';
            }
          }
        ?>
      </select>
      <div class="clear" style="margin-bottom: 30px;"></div>
      <button class="button button-primary button-hero">Generate</button>
    </form>
  </div>
  <?php
}

function generateQRCode( $data ) {
  if( !$data ) {
    return;
  }
  // QRcode::png( $data );
}
