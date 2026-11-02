<?php
/**
 * Customize component
 *
 * Adds the theme's customizer settings.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Customize;

use WP_Customize_Manager;
use Backdrop\Contracts\Bootable;
use Backdrop\Customize\Controls\RadioImage;
use Merriment\Tools\Mod;

/**
 * Customize component.
 *
 * The framework's customize component (`Backdrop\Customize\Provider`) adds the `Theme:`
 * panels and moves the core sections into them. This adds Merriment's own settings.
 *
 * @since  0.0.1
 * @access public
 */
class Component implements Bootable {

	/**
	 * The global layouts, matching the `#global-layout` classes in the styles.
	 *
	 * @since 0.0.1
	 * @var   array
	 */
	const LAYOUTS = [ 'left-sidebar', 'right-sidebar', 'no-sidebar' ];

	/**
	 * Adds the actions.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function boot(): void {

		// After the framework's component, which registers the panels on the default priority.
		add_action( 'customize_register', [ $this, 'register' ], 20 );
		add_action( 'customize_controls_enqueue_scripts', [ $this, 'controlsStyles' ] );
	}

	/**
	 * Registers the sections, settings and controls.
	 *
	 * @since  0.0.1
	 * @access public
	 * @param  WP_Customize_Manager $manager Instance of the customize manager.
	 * @return void
	 */
	public function register( WP_Customize_Manager $manager ) {

		// The framework doesn't place the core Background Image section in a panel.
		$background = $manager->get_section( 'background_image' );

		if ( $background && $manager->get_panel( 'theme_global' ) ) {
			$background->panel = 'theme_global';
		}

		$manager->add_section( 'theme_content_layout', [
			'title' => esc_html__( 'Layout', 'merriment' ),
			'panel' => $manager->get_panel( 'theme_content' ) ? 'theme_content' : '',
		] );

		$manager->add_setting( 'theme_content_layout', [
			'default'           => Mod::fallback( 'theme_content_layout' ),
			'sanitize_callback' => [ $this, 'sanitizeLayout' ],
		] );

		// `%1$s` is replaced with the parent theme URI by the control.
		$manager->add_control( new RadioImage( $manager, 'theme_content_layout', [
			'label'   => esc_html__( 'Global Layout', 'merriment' ),
			'section' => 'theme_content_layout',
			'choices' => [
				'left-sidebar'  => [
					'url'   => '%1$s/public/images/2cl.png',
					'label' => esc_html__( 'Left Sidebar', 'merriment' ),
				],
				'right-sidebar' => [
					'url'   => '%1$s/public/images/2cr.png',
					'label' => esc_html__( 'Right Sidebar', 'merriment' ),
				],
				'no-sidebar'    => [
					'url'   => '%1$s/public/images/1col.png',
					'label' => esc_html__( 'No Sidebar', 'merriment' ),
				],
			],
		] ) );
	}

	/**
	 * Returns a valid layout, or the default.
	 *
	 * @since  0.0.1
	 * @access public
	 * @param  string $layout The layout to check.
	 * @return string
	 */
	public function sanitizeLayout( $layout ) {

		return in_array( $layout, static::LAYOUTS, true ) ? $layout : Mod::fallback( 'theme_content_layout' );
	}

	/**
	 * Styles the layout picker: hides its radio buttons visually (so it still works with the
	 * keyboard) and outlines the selected layout.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function controlsStyles() {

		wp_add_inline_style( 'customize-controls', '
			.customize-control-backdrop-radio-image .radio-image { display: inline-block; margin: 0 8px 8px 0; cursor: pointer; }
			.customize-control-backdrop-radio-image input[type="radio"] { position: absolute; opacity: 0; }
			.customize-control-backdrop-radio-image img { display: block; width: 90px; height: auto; border: 3px solid transparent; box-sizing: border-box; }
			.customize-control-backdrop-radio-image img:hover { border-color: #ccc; }
			.customize-control-backdrop-radio-image input:checked ~ img { border-color: #2271b1; }
			.customize-control-backdrop-radio-image input:focus-visible ~ img { outline: 2px solid #2271b1; outline-offset: 2px; }
		' );
	}
}
