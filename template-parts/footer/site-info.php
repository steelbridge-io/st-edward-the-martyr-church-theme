<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://stedwardsisters.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: Saint Edward The Martyr Catholic Church */
		printf( __( '%s', 'twentyseventeen' ), 'Saint Edward The Martyr Catholic Church' );
		?>
	</a>
</div><!-- .site-info -->
