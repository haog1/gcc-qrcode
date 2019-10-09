<?php
/**
 * Plugin Name: GCC QR Code Generator
 * Plugin URI: https://github.com/haog1/gcc-qrcode
 * Description: The QR code generator for Glory City Church of Melbourne, Inspired by PPHPQRCode Library
 * Version: 1.0
 * Author: Tony Gao
 * Author URI: https://github.com/haog1
 */

require_once 'vendor/autoload.php';
require_once 'helper.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

add_action('plugins_loaded', 'plugin_loaded');

function plugin_loaded() {
  require_once 'enqueue.php';
  require_once 'lib/qrlib.php';
  require_once 'main.php';
}
