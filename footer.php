<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gro-consulting
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gro-consulting' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'gro-consulting' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'gro-consulting' ), 'gro-consulting', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php
	//Footer Menu
		// wp_nav_menu(
		// 	array(
		// 		'theme_location' => 'footer-menu',
		// 		'menu_id'        => 'footer-menu',
		// 	)
		// );

	//Seo Menu
	// wp_nav_menu(
		// 	array(
		// 		'theme_location' => 'seo-menu',
		// 		'menu_id'        => 'seo-menu',
		// 	)
		// );
			?>
<?php wp_footer(); ?>

</body>
</html>
