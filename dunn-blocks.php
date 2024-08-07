<?php
/**
 * Plugin Name:       Dunn Blocks
 * Description:       All of Ryan's Blocks
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dunn-blocks
 *
 * @package DunnBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function dunn_blocks_dunn_blocks_block_init() {
	
	$blocks = array(
		'tree-age-mapping/',
		'another-block/'
	);

	foreach( $blocks as $block ) {
		register_block_type( plugin_dir_path( __FILE__ ) . '/includes/block-editor/blocks/' . $block );
	}
	
}
add_action( 'init', 'dunn_blocks_dunn_blocks_block_init' );
