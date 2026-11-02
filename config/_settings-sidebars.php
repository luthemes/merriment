<?php
/**
 * Sidebar Settings Configuration.
 *
 * This file defines the sidebar locations for the Merriment theme.
 * These settings are used during theme initialization to register
 * the available sidebars with their respective names and descriptions.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

return [
    'primary' => [
        'name'        => __( 'Primary Sidebar', 'merriment' ),
        'description' => __( 'The main sidebar for widgets alongside primary content.', 'merriment' ),
    ],
    'footer' => [
        'name'        => __( 'Footer Sidebar', 'merriment' ),
        'description' => __( 'A widget area displayed in the footer section of the site.', 'merriment' ),
    ],
];
