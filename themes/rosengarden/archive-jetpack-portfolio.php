<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">                
            
			<header class="entry-header">
				
				<h1 class="entry-title">                        

					<?php echo esc_html( get_the_title(96) ); ?>
				
				</h1>                    

			</header><!-- .entry-header -->

			<?php echo apply_filters('the_content', get_page(96)->post_content); ?>		

			<?php edit_post_link('edit', '', '', 96); ?>

		</div><!--col end -->

		</div> <!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
