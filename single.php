<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SanKyuMaru
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
            
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
           
            
            the_post_navigation( array (
                
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'sankyumaru' ) . '</span> ' . '<span class="screen-reader-text">' . __('Next post:', 'sankyumaru') . '</span> ' . '<span class="post-title">%title</span>', 
                
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'sankyumaru' ) . '</span> ' . '<span class="screen-reader-text">' . __ ('Previous:', 'sankyumaru') . '</span> ' . '<span class="post-title">%title</span>',
            ) );
    

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
