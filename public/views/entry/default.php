
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<?php Backdrop\Post\display_title(); ?>
		<div class="entry__metadata">
			<?php Backdrop\Post\display_date(); ?>
			<?php Backdrop\Post\display_author( [ 'before' => Merriment\sep() ] ); ?>
			<?php Backdrop\Post\display_comments_link( [ 'before' => Merriment\sep() ] ); ?>
		</div>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail(); ?>
		</a>
	<?php } ?>
	<div class="entry__content">
		<?php the_excerpt(); ?>
	</div>
</article>
