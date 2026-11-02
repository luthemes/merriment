	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
			<?php Backdrop\View\display( 'sidebar', 'footer', [ 'location' => 'footer' ] ); ?>
		<?php endif; ?>
		<?php Backdrop\View\display( 'menu', 'social', [ 'location' => 'social' ] ); ?>
		<?php Merriment\Template\Footer::displayCredit(); ?>
	</footer>
</div><!-- .site-container -->
<?php wp_footer(); ?>
</body>
</html>
