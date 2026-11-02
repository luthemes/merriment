
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<?php Backdrop\Post\display_title(); ?>
		<div class="entry__metadata">
			<?php Backdrop\Post\display_date(); ?>
		</div>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
		<picture class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</picture>
	<?php } ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
