<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tailwind_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer h-64 bg-teal flex justify-center items-center">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tailwindtheme' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tailwindtheme' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tailwindtheme' ), 'tailwindtheme', '<a href="http://ChrisPerko.net">Chris Perko</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
