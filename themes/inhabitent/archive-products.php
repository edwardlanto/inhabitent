<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */	
get_header(); ?>
			<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>	
			</header><!-- .page-header -->
			<?php
			$terms = get_terms( array(
  			'taxonomy'=>'product_type',
  			'orderby'=>'name',
  			'hide_empty'=>'false'
			)); 
			?>
			<div class = "taxonomy-container">
				<?php
					foreach($terms as $term):
					$url = get_term_link($term,'product_type');
			
				?>
				<a href ="<?php echo $url?>"><?php echo $term->name;?></a>
				<?php endforeach; ?>
			</div>
			<?php /* Start the Loop */ ?>
			<div class ="shop-items-container container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class = "product-container col-lg-3">
					<div class = "shop-archive-image-container">
						<a href ="<?php the_permalink();?>"><?php the_post_thumbnail( 'medium' ); ?></a>
					</div><!--shop-archive-image-->
					<div class = "shop-item-title">
						<p class ="shop-title">
						<span class = "product-title"><?php the_title(); ?></span>
						<span class = "price-text"><?php echo CFS()->get('price');?></span>
						</p>
					</div><!--shop-archive-title-->
				</div><!--product-container-->
			<?php endwhile; ?>
			</div><!--shop-items-container-->
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
<?php get_footer(); ?>