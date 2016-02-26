<?php
/**
 * The template for displaying an archive page for Categories.
 *
 * @package Wpas
 * @since Wpas 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content emd-container row" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

		<div class="col grid_8_of_12">

			<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1 class="archive-title"><?php printf( esc_html__( 'Category Archives: %s', 'wpas' ), '<span class="cat-archive">' . single_cat_title( '', false ) . '</span>' ); ?></h1>

					<?php if ( category_description() ) { // Show an optional category description ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
					<?php } ?>
				</header>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php wpas_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_8_of_12 -->
		<?php get_sidebar(); ?>

	</div> <!-- /#primary.site-content emd-container.row -->

<?php get_footer(); ?>
