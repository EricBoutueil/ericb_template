<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EricB_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ericb_template' ); ?></a>

  <header id="masthead" class="site-header">
<!--     <div class="container no-mobile"> -->

<!--   		<div class="site-branding">
  			<?php
  			the_custom_logo();
  			if ( is_front_page() && is_home() ) :
  				?>
  				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  				<?php
  			else :
  				?>
  				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  				<?php
  			endif;
  			$ericb_template_description = get_bloginfo( 'description', 'display' );
  			if ( $ericb_template_description || is_customize_preview() ) :
  				?>
  				<p class="site-description"><?php echo $ericb_template_description; /* WPCS: xss ok. */ ?></p>
  			<?php endif; ?>
  		</div>--><!-- .site-branding -->

<!--   		<nav id="site-navigation" class="main-navigation">
  			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ericb_template' ); ?></button>
  			<?php
  			wp_nav_menu( array(
  				'theme_location' => 'menu-1',
  				'menu_id'        => 'primary-menu',
  			) );
  			?>
  		</nav> --><!-- #site-navigation -->
<!--     </div> --><!-- .container -->

    <div id="sub-header-black-wrapper">
      <div class="container no-mobile">
        <nav id="sub-navigation">
          <?php wp_nav_menu( array(
            'theme_location' => 'header_top_black_menu',
            'menu' => 'Header top black menu',
            'menu_id' => 'sub-nav',
            // 'after' => '',
            // 'sort_column' => 'menu_order',
            // 'fallback_cb' => ''
          )); ?>
        </nav><!--end sub-navigation-->
        <nav id="login-navigation">
          <?php wp_nav_menu( array(
            'theme_location' => 'header_login_menu',
            'menu' => 'Header login menu',
            'menu_id' => 'login-nav',
            // 'after' => '&nbsp;&nbsp', // TBC
            // 'sort_column' => 'menu_order',
            // 'fallback_cb' => ''
          )); ?>
        </nav><!--end login-navigation-->
      </div><!-- .container -->
    </div><!-- #sub-header-black-wrapper -->
    <div id="main-header-wrapper">
      <div class="container">
<!--           <div class="logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ) ?>" /></a>
        </div> -->
        <nav id="main-header-navigation" class="navbar navbar-light navbar-expand-md">
          <div id="main-header-logo">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-DOT-squarre.png" width="90" height="90" alt="<?php bloginfo( 'name' ) ?>">
            </a>
          </div>
          <div id="main-header-menu">
            <?php wp_nav_menu( array(
              'theme_location' => 'header_services_menu',
              'menu' => 'Header services menu',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'main-nav-container',
              'menu_id' => 'main-nav',
              'menu_class'      => 'navbar-nav mr-auto',
              // 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
              // 'sort_column' => 'menu_order',
              // 'fallback_cb' => ''
            )); ?>
          </div>
        </nav><!--end navigation-->
      </div><!-- .container -->
    </div><!-- #main-header-wrapper -->

  </header><!-- #masthead -->

	<div id="content" class="site-content">
    <div class="container">
