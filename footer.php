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

  <div id="cta-right-bloc">
    <a href="https://home-services.com/travailler-chez-home-services/">
      Travailler chez<br><strong>Home Services</strong>
    </a>
  </div>

  <footer id="colophon" class="site-footer">
    <div class="container no-mobile">
      <?php
        if ( is_active_sidebar( 'top-footer' ) ) : ?>
        <div id="topfooter">
          <?php dynamic_sidebar( 'top-footer' ); ?>
        </div><!--end topfooter-->
      <?php endif; ?>
    </div><!-- .container -->

    <div class="container no-mobile">
      <?php
        if ( is_active_sidebar( 'middle-footer' ) ) : ?>
        <div id="middlefooter">
          <?php dynamic_sidebar( 'middle-footer' ); ?>
        </div><!--end middlefooter-->
      <?php endif; ?>
    </div><!-- .container -->

    <div class="container no-mobile">
      <?php
        if ( is_active_sidebar( 'bottom-footer' ) ) : ?>
        <div id="bottomfooter">
          <?php dynamic_sidebar( 'bottom-footer' ); ?>
        </div><!--end bottomfooter-->
      <?php endif; ?>
    </div><!-- .container -->

    <div id="site-info">
      <div class="container">
<!--         <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ericb_template' ) ); ?>">
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
 -->
        <p>Copyright <?php echo date('Y'); ?></p>
      </div><!-- .container -->
    </div><!-- #site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
