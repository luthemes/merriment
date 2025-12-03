<?php
/**
 * Custom Header Component.
 *
 * Manages the custom header component.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Header;

use Backdrop\Contracts\Bootable;

/**
 * Custom Header Component class.
 *
 * @since  0.0.1
 * @access public
 */
class Component implements Bootable {

	/**
	 * Bootstraps the component.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function boot(): void {

		// Register headers on `after_setup_theme`.
		add_action( 'after_setup_theme', [ $this, 'register' ] );
	}

	/**
	 * Runs the register actions.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function register() {
		// Enable custom header support
		add_theme_support('custom-header', [
			'default-image' => get_template_directory_uri() . '/public/images/header-image.jpg',
			'width'         => 1600,
			'height'        => 400,
			'flex-height'   => true,
			'flex-width'    => true,
		]);
	}
}