<?php
/**
 * Template tags.
 *
 * This file holds template tags for the theme. Template tags are PHP functions
 * meant for use within theme templates.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment;

/**
 * Returns the metadata separator.
 *
 * @since  0.0.1
 * @access public
 * @param  string  $sep  String to separate metadata.
 * @return string
 */
function sep( $sep = '' ) {

	return apply_filters(
		'merriment/sep',
		sprintf(
			' <span class="sep">%s</span> ',
			$sep ?: esc_html_x( '&middot;', 'meta separator', 'merriment' )
		)
	);
}

/**
 * Returns the global layout: `left-sidebar`, `right-sidebar` or `no-sidebar`.
 *
 * @since  0.0.1
 * @access public
 * @return string
 */
function layout() {

	$layout = Tools\Mod::get( 'theme_content_layout' );

	return apply_filters(
		'merriment/layout',
		in_array( $layout, Customize\Component::LAYOUTS, true ) ? $layout : 'right-sidebar'
	);
}
