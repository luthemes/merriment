<?php
/**
 * Default theme scripts functions
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/Merriment
 */

namespace Merriment;
use function Merriment\Vite\asset;

/**
 * Enqueue Scripts and Styles
 *
 * @since  0.0.1
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action( 'wp_enqueue_scripts', function() {

	// Assets are enqueued by their source path. `Merriment\Vite\asset()` looks them up in Vite's
	// manifest.json, which maps them to the built files, whose names change with their contents.

	// Rather than enqueue the main style.css stylesheet, we are going to enqueue screen.css.
	wp_enqueue_style( 'merriment-screen', asset( 'resources/scss/screen.scss' ), null, null );

	// Enqueue theme scripts
	wp_enqueue_script( 'merriment-app', asset( 'resources/js/app.js' ), [ 'jquery' ], null, true );

	// Screen reader text for the menu toggles, in the form the other luthemes themes'
	// `navigation.js` reads (as plain text).
	wp_localize_script( 'merriment-app', 'merrimentScreenReaderText', [
		'expandMain'    => __( 'Open the main menu', 'merriment' ),
		'collapseMain'  => __( 'Close the main menu', 'merriment' ),
		'expandChild'   => __( 'expand child menu', 'merriment' ),
		'collapseChild' => __( 'collapse child menu', 'merriment' ),
	] );

	// Loads ClassicPress' comment-reply script where appropriate.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );