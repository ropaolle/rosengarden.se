<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
							
							<p><?php print( esc_html__( 'Vallentuna Mat & Catering, &copy; 2017', 'understrap' ) ); ?></p>

							<?php
							if ( is_user_logged_in() ) {
								wp_nav_menu( array( 'theme_location'  => 'footer-menu' ) );
							} else {
								?><a href="wp-admin" aria-pressed="true">Logga in</a><?php
							}
							?>
							
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->		

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

