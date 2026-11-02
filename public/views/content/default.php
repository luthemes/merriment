<section id="content" class="site-content">
	<div id="global-layout" class="<?php echo esc_attr( Merriment\layout() ); ?>">
		<main id="main" class="content-area">
			<?php if ( have_posts() ) : ?>
				<?php if ( is_archive() || is_search() ) : ?>
					<header class="archive-header">
						<h1 class="archive-header__title">
							<?php if ( is_search() ) : ?>
								<?php
								// Translators: %s is the search query.
								printf( esc_html__( 'Search results for: %s', 'merriment' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
								?>
							<?php else : ?>
								<?php echo wp_kses_post( get_the_archive_title() ); ?>
							<?php endif; ?>
						</h1>
						<?php the_archive_description( '<div class="archive-header__description">', '</div>' ); ?>
					</header>
				<?php endif; ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php Backdrop\View\display( 'entry' ); ?>
				<?php endwhile; ?>
				<?php Backdrop\View\display( 'nav/pagination', 'posts' ); ?>
			<?php else : ?>
				<?php Backdrop\View\display( 'entry', 'none' ); ?>
			<?php endif; ?>
		</main>
		<?php if ( 'no-sidebar' !== Merriment\layout() ) : ?>
			<?php Backdrop\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
		<?php endif; ?>
	</div>
</section>
