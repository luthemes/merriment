<?php
/**
 * Customize service provider
 *
 * Registers the customize component.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Customize;

use Backdrop\Core\ServiceProvider;

/**
 * Customize service provider.
 *
 * @since  0.0.1
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the customize component.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function register(): void {

		$this->app->singleton( Component::class );
	}

	/**
	 * Boots the customize component.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function boot(): void {

		$this->app->resolve( Component::class )->boot();
	}
}
