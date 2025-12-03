<?php
/**
 * Represents a single menu location.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Menu\App;

use JsonSerializable;

class Menu implements JsonSerializable {

    /**
     * Menu ID (slug).
     *
     * @var string
     */
    protected string $id = '';

    /**
     * Menu label.
     *
     * @var string
     */
    protected string $name = '';

    /**
     * Constructor.
     *
     * @param  string $id      Menu ID.
     * @param  array  $options May include 'name'.
     */
    public function __construct( string $id, array $options = [] ) {

        foreach ( array_keys( get_object_vars( $this ) ) as $key ) {
            if ( array_key_exists( $key, $options ) ) {
                $this->{$key} = $options[ $key ];
            }
        }

        $this->id = $id;
    }

    public function id(): string {
        return $this->id;
    }

    public function name(): string {
        return $this->name;
    }

    public function jsonSerialize(): array {
        return [
            'id'   => $this->id,
            'name' => $this->name
        ];
    }
}
