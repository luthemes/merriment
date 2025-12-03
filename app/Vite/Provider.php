<?php
/**
 * Vite assets provider
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes/portfolio/merriment
 */

namespace Merriment\Vite;

use Backdrop\Core\ServiceProvider;

/**
 * App service provider.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Callback executed when the `\Hybrid\Core\Application` class registers
	 * providers. Use this method to bind items to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function register(): void {

        // Bind the Laravel Mix manifest for cache-busting.
        $this->app->singleton( 'inheritance/vite/parent', function() {

            $file = get_template_directory() . '/' . 'public/assets/manifest.json';

            return file_exists( $file ) ? json_decode( file_get_contents( $file ), true ) : null;
        } );
    }
}