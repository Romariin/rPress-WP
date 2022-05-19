<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rPressTW
 */

?>

<footer id="colophon" class="w-full absolute !bottom-0">
	<div class="flex justify-center py-2 text-white font-semibold">
		<a class="tooltip" data-tip="😎 React > Wordpress" href="<?php echo esc_url( __( 'https://db.romarin.dev/', 'rpress' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Fait avec 💖 par %s en utilisant WordPress', 'rpress' ), 'Romain. R' );
			?>

		</a>
	</div>
</footer><!-- #colophon -->
