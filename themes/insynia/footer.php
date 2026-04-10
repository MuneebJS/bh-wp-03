	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<p>
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
				<?php
				printf(
					/* translators: %s: WordPress link */
					esc_html__( 'Powered by %s.', 'insynia' ),
					'<a href="https://wordpress.org">WordPress</a>'
				);
				?>
			</p>
		</div><!-- .container -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
