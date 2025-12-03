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

	// Rather than enqueue the main style.css stylesheet, we are going to enqueue screen.css.
	wp_enqueue_style( 'merrimentscreen', asset( 'resources/scss/screen.scss' ), null, null );

	// Enqueue theme scripts
	wp_enqueue_script( 'merriment-app', asset( 'resources/js/app.js' ), [ 'jquery' ], null, true );
	wp_localize_script( 'merriment-app', 'merrimentScreenReaderText', [
		'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'merriment' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'merriment' ) . '</span>',
	] );

	// Loads ClassicPress' comment-reply script where appropriate.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );