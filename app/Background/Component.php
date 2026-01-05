<?php
/**
 * Custom Backdround Component.
 *
 * Manages the custom header component.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Background;

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
        $defaults = array(
            'default-color'          => '',
            'default-image'          => get_parent_theme_file_uri( 'public/images/background.jpg' ),
            'default-repeat'         => 'no-repeat',
            'default-size'           => 'cover',
            'default-attachment'     => 'fixed',
        );
        add_theme_support( 'custom-background', $defaults );
	}
}