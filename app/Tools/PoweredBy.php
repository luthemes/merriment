<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Merriment
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/merriment
 */

namespace Merriment\Tools;

/**
 * Powered by class.
 *
 * @since  0.0.1
 * @access public
 */
class PoweredBy {

	/**
	 * Returns an array of all the powered by quotes.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return array
	 */
	public static function all() {

		return apply_filters( 'merriment/poweredby/collection', [
			esc_html__( 'Powered by heart and soul.', 'merriment' ),
			esc_html__( 'Powered by crazy ideas and passion.', 'merriment' ),
			esc_html__( 'Powered by the thing that holds all things together in the universe.', 'merriment' ),
			esc_html__( 'Powered by love.', 'merriment' ),
			esc_html__( 'Powered by the vast and endless void.', 'merriment' ),
			esc_html__( 'Powered by the code of a maniac.', 'merriment' ),
			esc_html__( 'Powered by peace and understanding.', 'merriment' ),
			esc_html__( 'Powered by coffee.', 'merriment' ),
			esc_html__( 'Powered by sleepness nights.', 'merriment' ),
			esc_html__( 'Powered by the love of all things.', 'merriment' ),
			esc_html__( 'Powered by something greater than myself.', 'merriment' ),
			esc_html__( 'Powered by whispers from the future.', 'merriment' ),
			esc_html__( 'Powered by the fusion of technology and dreams.', 'merriment' ),
			esc_html__( 'Powered by the strength found in kindness.', 'merriment' ),
			esc_html__( 'Powered by the melodies of the unseen world.', 'merriment' ),
			esc_html__( 'Powered by the courage of the unheard voices.', 'merriment' ),
			esc_html__( 'Powered by the beauty of the human spirit.', 'merriment' ),
			esc_html__( 'Powered by the quest for eternal wisdom.', 'merriment' ),
			esc_html__( 'Powered by the energy of uncharted galaxies.', 'merriment' ),
			esc_html__( 'Powered by the magic hidden in plain sight.', 'merriment' ),
			esc_html__( 'Powered by the legacy of the ancients.', 'merriment' ),
			esc_html__( 'Powered by the dance between light and darkness.', 'merriment' ),
			esc_html__( 'Powered by the touch of the morning sun.', 'merriment' ),
			esc_html__( 'Powered by the secrets of the deep ocean.', 'merriment' ),
			esc_html__( 'Powered by the echoes of laughter and joy.', 'merriment' ),
			esc_html__( 'Powered by the relentless pursuit of truth.', 'merriment' ),
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public static function display() {

		echo esc_html( static::render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return string
	 */
	public static function render() {

		$collection = static::all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}