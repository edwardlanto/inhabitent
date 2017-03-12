<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class = "primary-secondary-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class ="archive-adventure-container">
                        <?php the_post_thumbnail( 'full' ) ?>
                    <a href = "<?php the_permalink();?>" class ="archive-adventure-title">
                        <?php the_title(); ?>
                    </a>
                    <a href ="<?php the_permalink();?>"class = "home-read-button-container">Read More</a>
                </div>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
