<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Wpas
 * @since Wpas 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_front_page() ) { ?>
		<header class="entry-header">
			<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
			<?php if ( has_post_thumbnail() && !is_search() && !post_password_required() ) { ?>
				<div class="entry-thumb" itemprop="image"><?php the_post_thumbnail( 'post_feature_full_width' ); ?></div>
			<?php } ?>
		</header>
	<?php } ?>
	<div class="entry-content">
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
