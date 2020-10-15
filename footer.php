<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<!-- carbon field demo -->
		<?php
			$bgs = array(
					'mountain' => 'https://source.unsplash.com/X1UTzW8e7Q4/800x600',
					'temple' => 'https://source.unsplash.com/ioJVccFmWxE/800x600',
					'road' => 'https://source.unsplash.com/5c8fczgvar0/800x600',
			);
			$text = carbon_get_theme_option('crb_text');
			$image = carbon_get_theme_option('crb_background_image');

		?>

		<div>
			<p><?= $text ?></p>
			<img src="<?= $bgs[$image] ?>" alt="<?= $image ?>" width="300" />
		</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="https://automattic.com/">Automattic</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
