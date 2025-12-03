<?php
/**
 * Collection of Menu objects.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Menu\App;
use Merriment\Tools\Collection;

class Menus extends Collection {

    /**
     * Add a menu to the collection.
     *
     * @param  string     $id    Menu ID.
     * @param  Menu|array $value Menu instance or options array.
     * @return void
     */
    public function add( $id, $value ) {

        parent::add( $id, $value instanceof Menu ? $value : new Menu( $id, (array) $value ) );
    }
}
