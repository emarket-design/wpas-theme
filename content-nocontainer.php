<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Wpas
 * @since Wpas 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content nocontainer">
                <?php the_content(); ?>
                <?php wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpas' ),
                        'after' => '</div>',
                        'link_before' => '<span class="page-numbers">',
                        'link_after' => '</span>'
                ) ); ?>
        </div><!-- /.entry-content -->
        <footer class="entry-meta">
                <?php edit_post_link( esc_html__( 'Edit', 'wpas' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
        </footer><!-- /.entry-meta -->
</article><!-- /#post -->
