<?php
/**
 * The template for displaying all portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#custom-post-types
 *
 * @package Perfect_Portfolio
 */
get_header(); ?>
    <div class="tc-wrapper">
    	<div id="primary" class="content-area">
    	    <main id="main" class="site-main">
                <div class="gallery-wrap">
            		<?php
            		while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'portfolio' );

            		endwhile; // End of the loop.
                    ?>
                </div><!-- .gallery-wrap -->
                        
        	</main><!-- #main -->
    	</div><!-- #primary -->
    </div>
<?php 
get_footer();
