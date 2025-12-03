<?php
/**
 * Handles menu registration with WordPress.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Menu\App;

use Backdrop\Contracts\Bootable;
use Merriment\Tools\Config;

class Component implements Bootable {

    protected Menus $menus;

    public function __construct( Menus $menus ) {
        $this->menus = $menus;
    }

    /**
     * Bootstraps menu registration hooks.
     *
     * @return void
     */
    public function boot(): void {

        add_action( 'after_setup_theme', [ $this, 'register' ] );

        add_action(
            'merriment/core/menu/register',
            [ $this, 'registerDefaultMenus' ]
        );
    }

    /**
     * Register theme menus.
     *
     * @return void
     */
    public function register(): void {

        // Allow external registration.
        do_action( 'merriment/core/menu/register', $this->menus );

        // Register each menu location.
        foreach ( $this->menus->all() as $menu ) {
            if ( $menu instanceof Menu ) {
                register_nav_menu( $menu->id(), $menu->name() );
            }
        }
    }

    /**
     * Load menu definitions from config file.
     *
     * @param  Menus $menus
     * @return void
     */
    public function registerDefaultMenus( Menus $menus ): void {

        $config = Config::get( '_settings-menus', [] );

        if ( is_array( $config ) ) {
            foreach ( $config as $id => $options ) {
                $menus->add( (string) $id, (array) $options );
            }
        }
    }
}
