<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SanKyuMaru
 */

?>

<?php global $first_post; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        
        
         <?php
    if ( has_post_thumbnail() ) { ?>
    <figure class="featured-image">
        <?php the_post_thumbnail(); ?>
            </figure>
        <?php }
    ?>
        
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title index">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title index"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        
            if ( has_excerpt( $post->ID ) ) {
            echo '<div class="deck">';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '</div><!-- .deck -->'; 
        }
        
        

		if ( $first_post == true ) :
			?>
                
                <div class="index-entry-meta">
                    <?php sankyumaru_index_posted_on(); ?>
                </div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    
   
    
	<div class="index-entry-content">
		<?php
        the_excerpt();
        ?>

	</div><!-- .entry-content -->
        
        <div class ="continue-reading">
    <a href="<?php echo esc_url ( get_permalink() ); ?>" rel="bookmark">
            <?php
     printf(
			wp_kses(
				
				__( 'Continue reading <span class="screen-reader-text"> "%s"</span>', 'sankyumaru' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) ;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sankyumaru' ),
			'after'  => '</div>',
		) );
		?>
            </a>
    </div>

<!--
	<footer class="entry-footer">
		 sankyumaru_entry_footer(); ?>
	</footer> 
-->
</article><!-- #post-<?php the_ID(); ?> -->
