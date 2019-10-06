<?php

add_action( 'admin_menu', 'add_admin_menu' );

/**
 * Adds a the new item to the admin menu.
 */
function add_admin_menu() {
  add_submenu_page( 'tools.php', 'QR Code Generator', 'QR Code Generator', 'manage_options', 'qr-code-generator', 'render_admin_panel' );
}

function render_admin_panel() {
  ?>
  <div class="gcc-qr-code--wrapper">
    <h1 class="gcc-qr-code--title">Generate QR Code</h1>
    <h2 class="gcc-qr-code--sub-title">Choose a Post Type</h2>
    <form class="gcc-qr-code--form" action="tools.php?page=qr-code-generator?method=generate_qrcode" method="post">
      <select id="gcc-qr-code--selector" required="true" multiple style="min-height: 120px;min-width: 150px">
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
      <div class="gcc-qr-code--clear clear" style="margin-bottom: 30px;"></div>
      <button class="gcc-qr-code--btn button button-primary button-hero">Generate</button>
    </form>
    <div class="gcc-qr-code--container">
        <div class="gcc-qr-code--list-wrapper">
          <h2 class="gcc-qr-code--sub-title">Results are shown below:</h2>
          <div class="gcc-qr-code--max-height-container" style="max-height: 450px;overflow: scroll">
            <div class="gcc-qr-code--inner-wrapper"></div>
          </div>
        </div>
    </div>
  </div>
  <?php
}

function generateQRCode( $data ) {
  if( !$data ) {
    return;
  }
  // QRcode::png( $data );
}
