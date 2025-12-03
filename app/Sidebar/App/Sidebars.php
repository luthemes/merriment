<?php
/**
 * Sidebars Collection.
 *
 * Houses the collection of sidebars in a single array-object.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Sidebar\App;

use Merriment\Tools\Collection;

/**
 * Sidebars class.
 *
 * @since  0.0.1
 * @access public
 */
class Sidebars extends Collection {

	/**
	 * Adds a new sidebar to the collection.
	 *
	 * @since  0.0.1
	 * @access public
	 * @param  string  $id
	 * @param  array   $value
	 * @return void
	 */
	public function add( $id, $value ) {
        
		// If $value is not an instance of Sidebar, instantiate it.
		parent::add( $id, $value instanceof Sidebar ? $value : new Sidebar( $id, $value ) );
	}
}