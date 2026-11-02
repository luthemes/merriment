<!DOCTYPE html>
<html <?php Backdrop\Attr\display( 'html' ); ?>>
<head>
<?php wp_head(); ?>
</head>
<body <?php Backdrop\Attr\display( 'body' ); ?>>
<?php wp_body_open(); ?>
<div id="container" class="site-container">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'merriment' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-header__container">
			<?php if ( has_header_image() ) : ?>
				<img class="site-header__image" src="<?php echo esc_url( get_header_image() ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="" />
			<?php endif; ?>
			<div class="site-header__branding">
				<?php Backdrop\Site\display_title( [ 'tag' => is_front_page() ? 'h1' : 'div' ] ); ?>
				<?php Backdrop\Site\display_description(); ?>
			</div>
			<?php Backdrop\View\display( 'menu', 'primary', [ 'location' => 'primary'] ); ?>
		</div>
	</header>