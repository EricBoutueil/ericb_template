<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EricB_template
 */

?>

    </div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <div class="container">
  		<div class="site-info">
  			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ericb_template' ) ); ?>">
  				<?php
  				/* translators: %s: CMS name, i.e. WordPress. */
  				printf( esc_html__( 'Proudly powered by %s', 'ericb_template' ), 'WordPress' );
  				?>
  			</a>
  			<span class="sep"> | </span>
  				<?php
  				/* translators: 1: Theme name, 2: Theme author. */
  				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ericb_template' ), 'ericb_template', '<a href="http://underscores.me/">Underscores.me</a>' );
  				?>
  		</div><!-- .site-info -->
    </div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
