<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
$header_flash = get_page(8);
$corner_flash = get_page(471);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Header Area ******************* -->
<div class="wrapper" id="wrapper-header-full-first">

	<div class="<?php echo esc_attr( $container ); ?>" id="header-full-first-content" tabindex="-1">

		<?php if ( has_custom_logo() ) {
			the_custom_logo();
		} ?><!-- end custom logo -->

		<!-- Your site title as branding in the menu -->
		<?php if ( is_front_page() && is_home() ) : ?>

			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

		<?php else : ?>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

		<?php endif; ?>

	</div>

</div><!-- #wrapper-header-full-first -->

	<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>		

			<nav class="navbar navbar-expand navbar-dark bg-dark">

			<?php if ( 'container' == $container ) : ?>
				<div class="container" >
			<?php endif; ?>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>

				<?php if ( 'container' == $container ) : ?>
				</div><!-- .container -->
				<?php endif; ?>

			</nav><!-- .site-navigation -->		

	</div><!-- .wrapper-navbar end -->

<!-- ******************* Header flash ******************* -->
<?php if ( is_front_page() ) : ?>

	<?php if ( $corner_flash->post_status == 'publish' ) : ?>

		<div class="corner-ribbon" id="header-corner-flash">

			<?php echo apply_filters('the_content', $corner_flash->post_content); ?>		

		</div><!-- #corner-flash -->

	<?php endif; ?> 	

	<?php if ( $header_flash->post_status == 'publish' ) : ?>

		<div class="wrapper" id="wrapper-header-flash">

			<div class="<?php echo esc_attr( $container ); ?>" id="header-flash" tabindex="-1">

				<?php echo apply_filters('the_content', $header_flash->post_content); ?>	

			</div>

		</div> <!-- #wrapper-header-flash -->
	
	<?php endif; ?> 

<?php endif; ?>

<?php get_sidebar( 'headerfull-second' ); ?>
