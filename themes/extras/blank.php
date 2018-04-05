<?php
/**
 * Template Name: Blank Page Template 2
 *
 * Template for displaying a blank page.
 *
 * @package rosengarden
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title"
		content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'blank' ); ?>

    <?php endwhile; // end of the loop. ?>

	<!-- ******************* Header flash ******************* -->
    <div class="wrapper" id="wrapper-header-flash">

    <div class="<?php echo esc_attr( $container ); ?>" id="header-flash" tabindex="-1">

        <?php edit_post_link('edit', '', '', 2); ?>

        <?php echo apply_filters('the_content', get_page(2)->post_content); ?>		

    </div>

    </div><!-- #wrapper-header-flash -->

    <!-- ******************* Header flash ******************* -->
    <div class="wrapper" id="wrapper-header-flash">

    <div class="<?php echo esc_attr( $container ); ?>" id="header-flash" tabindex="-1">

        <?php edit_post_link('edit', '', '', 6); ?>

        <?php echo apply_filters('the_content', get_page(6)->post_content); ?>		

    </div>

    </div><!-- #wrapper-header-flash -->

<?php wp_footer(); ?>
</body>
</html>