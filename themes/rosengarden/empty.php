<?php
/**
 * Template Name: Empty Page Template 2
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package rosengarden
 */

get_header();

?>

<!-- ******************* Front first ******************* -->
<div class="wrapper wrapper-front" id="front-first">

    <div class="container" tabindex="-1">

        <div class="row">

            <div class="col-md-12">      
                
                <header class="entry-header">
                    
                    <h1 class="entry-title">                        

                        <?php echo esc_html( get_the_title(6) ); ?>
                    
                    </h1>                    

                </header><!-- .entry-header -->

                <?php echo apply_filters('the_content', get_page(6)->post_content); ?>	

                <?php edit_post_link('edit', '', '', 6); ?>
                     
            </div><!--col end -->

        </div><!-- row end -->

    </div>

</div>

<!-- ******************* Front second ******************* -->
<div class="wrapper wrapper-front" id="front-second">

    <div class="container" tabindex="-1">

        <div class="row">

            <div class="col-md-12">                
            
                <header class="entry-header">
                    
                    <h1 class="entry-title">                        

                        <?php echo esc_html( get_the_title(2) ); ?>
                    
                    </h1>                    

                </header><!-- .entry-header -->

                <?php echo apply_filters('the_content', get_page(2)->post_content); ?>		

                <?php edit_post_link('edit', '', '', 2); ?>

            </div><!--col end -->

        </div><!-- row end -->

    </div>

</div>

<?php

get_footer();
