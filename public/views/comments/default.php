<?php
if ( post_password_required() ) {
	return;
}

if ( ! have_comments() && ! comments_open() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-area__title">
			<?php
			$merriment_count = get_comments_number();

			printf(
				esc_html(
					// Translators: 1 is the number of comments, 2 is the post title.
					_n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $merriment_count, 'merriment' )
				),
				esc_html( number_format_i18n( $merriment_count ) ),
				esc_html( get_the_title() )
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php wp_list_comments( [
				'avatar_size' => 48,
				'style'       => 'ol',
				'callback'    => function( $comment, $args, $depth ) {
					Backdrop\View\display( 'comment', Backdrop\Comment\hierarchy(), compact( 'comment', 'args', 'depth' ) );
				},
			] ); ?>
		</ol>

		<?php the_comments_navigation(); ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="comments-area__closed"><?php esc_html_e( 'Comments are closed.', 'merriment' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>
