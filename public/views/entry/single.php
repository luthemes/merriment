<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<?php Backdrop\Post\display_title(); ?>
		<div class="entry__metadata">
			<?php Backdrop\Post\display_date(); ?>
			<?php Backdrop\Post\display_author( [ 'before' => Merriment\sep() ] ); ?>
			<?php Backdrop\Post\display_comments_link( [ 'before' => Merriment\sep() ] ); ?>
		</div>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>
	<div class="entry__content">
		<?php the_content(); ?>
		<?php Backdrop\View\display( 'nav/pagination', 'post' ); ?>
	</div>
	<footer class="entry__footer">
		<?php Backdrop\Post\display_terms( [
			// Translators: %s is the category list.
			'text'     => __( 'Posted in %s', 'merriment' ),
			'taxonomy' => 'category',
		] ); ?>
		<?php Backdrop\Post\display_terms( [
			// Translators: %s is the tag list.
			'text'     => __( 'Tagged %s', 'merriment' ),
			'taxonomy' => 'post_tag',
		] ); ?>
	</footer>
</article>
