<section id="content" class="site-content">
	<div id="global-layout" class="<?php echo esc_attr( Merriment\layout() ); ?>">
		<main id="main" class="content-area">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php Backdrop\View\display( 'entry', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
		<?php if ( 'no-sidebar' !== Merriment\layout() ) : ?>
			<?php Backdrop\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
		<?php endif; ?>
	</div>
</section>
