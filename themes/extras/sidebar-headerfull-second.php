<?php
/**
 * Sidebar setup for header full second.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The header Full second-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-header-full-second">

		<div class="<?php echo esc_attr( $container ); ?>" id="header-full-second-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'headerfull-second' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-header-full-second -->

<?php endif; ?>
