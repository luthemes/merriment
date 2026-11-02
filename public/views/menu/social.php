<?php if ( has_nav_menu( $data->location ) ) : ?>
	<nav id="social" class="social-menu" aria-label="<?php esc_attr_e( 'Social', 'merriment' ); ?>">
		<?php wp_nav_menu( [
			'theme_location' => $data->location,
			'depth'          => 1,
			'container'      => '',
			'menu_class'     => 'social-menu__items',
			'item_spacing'   => 'discard',
		] ); ?>
	</nav>
<?php endif; ?>
