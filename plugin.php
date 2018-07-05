<?php
/**
 * Plugin Name: Split Panel Gutenberg Block
 * Plugin URI: https://github.com/brettsmason/split-panel-block/
 * Description: A simple layout block for featuring an image plus nested content to the left/right.
 * Author: Brett Mason
 * Author URI: https://github.com/brettsmason/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
