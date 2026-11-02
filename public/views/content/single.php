<section id="content" class="site-content">
	<div id="global-layout" class="<?php echo esc_attr( Merriment\layout() ); ?>">
		<main id="main" class="content-area">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php Backdrop\View\display( 'entry', 'single' ); ?>
				<?php the_post_navigation( [
					'prev_text' => '<span class="post-navigation__label">' . esc_html__( 'Previous', 'merriment' ) . '</span> %title',
					'next_text' => '<span class="post-navigation__label">' . esc_html__( 'Next', 'merriment' ) . '</span> %title',
				] ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
		<?php if ( 'no-sidebar' !== Merriment\layout() ) : ?>
			<?php Backdrop\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
		<?php endif; ?>
	</div>
</section>
