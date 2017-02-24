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


<?php
    	foreach($terms as $term):
   		$url = get_term_link($term->slug. 'product_type');
  ?>


   
 

      <a href ="<?php $url ?>"><?php echo $term->name;?></a>
	  <?php endforeach; ?>



			<?php /* Start the Loop */ ?>
			<div class ="shop-items-container">
			<?php while ( have_posts() ) : the_post(); ?>
						<div class = "shop-archive-image">
							
							<a href ="<?php the_permalink();?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						</div>
						
			<?php endwhile; ?>


			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>