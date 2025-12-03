<?php
/**
 * Menu Component Service Provider.
 *
 * Bootstraps the menu component bindings and registration.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace merriment\Menu;

use Backdrop\Core\ServiceProvider;
use Merriment\Menu\App\Component;
use Merriment\Menu\App\Menus;

class Provider extends ServiceProvider {

    /**
     * Register component services.
     *
     * @return void
     */
    public function register(): void {

        // Menus collection.
        $this->app->singleton( 'merriment/menus', Menus::class );

        // Menu Component.
        $this->app->singleton(
            Component::class,
            function () {
                return new Component(
                    $this->app->resolve( 'merriment/menus' )
                );
            }
        );
    }

    /**
     * Bootstrap the menu component.
     *
     * @return void
     */
    public function boot(): void {
        $this->app->resolve( Component::class )->boot();
    }
}
