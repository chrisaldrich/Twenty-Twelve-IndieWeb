<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwelve' ) ); ?>" class="imprint" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>">
				<?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?>
			</a> with <a href="http://indieweb.org" alt="IndieWeb">principles from <img src="/wp-content/themes/twentytwelveindieweb/img/indieweb-badge.png"
                                alt="IndieWebCamp" width="80" height="15" style="image-rendering:pixelated;" /></a><br /> <a href="http://microformats.org/wiki/get-started"><img src="/wp-content/themes/twentytwelveindieweb/img/microformats-badge.png" width="80" height="15" alt="Microformats.org" style="image-rendering:pixelated;"></a> <a title="This site accepts webmentions." href="https://www.w3.org/TR/webmention/"><img src="/wp-content/themes/twentytwelveindieweb/img/webmention-badge.png" width="80" height="15" alt="Webmention" style="image-rendering:pixelated;"></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
