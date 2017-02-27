<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<span class ="search-product-title">
					<a href ="<?php the_permalink();?>">
						<?php the_title();?>
					</a>
						<p class ="search-excerpt">
							<?php the_excerpt();?>
						</p>
						<a id ="inhab-button" href="<?php echo esc_url( get_permalink() ) ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</span>
				<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
