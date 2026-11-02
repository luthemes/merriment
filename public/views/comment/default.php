<li id="comment-<?php comment_ID(); ?>" <?php comment_class( '', $data->comment ); ?>>
	<article class="comment__body">
		<header class="comment__meta">
			<?php echo get_avatar( $data->comment, $data->args['avatar_size'], '', '', [ 'class' => 'comment__avatar' ] ); ?>
			<?php Backdrop\Comment\display_author_link( [ 'class' => 'comment__author' ] ); ?>
			<?php Backdrop\Comment\display_permalink( [
				'class' => 'comment__permalink',
				'text'  => Backdrop\Comment\render_date(),
			] ); ?>
			<?php Backdrop\Comment\display_edit_link( [ 'before' => Merriment\sep() ] ); ?>
		</header>

		<div class="comment__content">
			<?php if ( ! Backdrop\Comment\is_approved( $data->comment ) ) : ?>
				<p class="comment__moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'merriment' ); ?></p>
			<?php endif; ?>
			<?php comment_text( $data->comment ); ?>
		</div>

		<footer class="comment__footer">
			<?php Backdrop\Comment\display_reply_link( [
				'depth'     => $data->depth,
				'max_depth' => $data->args['max_depth'],
			] ); ?>
		</footer>
	</article>
<?php /* No closing </li>: wp_list_comments() closes it after any replies. */
