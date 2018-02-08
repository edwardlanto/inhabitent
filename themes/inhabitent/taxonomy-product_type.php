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
			<div class ="shop-items-container container">
			<?php while ( have_posts() ) : the_post(); ?>

		<div class = "product-container col-lg-3 col-md-6">
						<div class = "shop-archive-image">
							<a href ="<?php the_permalink();?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						</div><!--shop-archive-image-->
						<div class = "shop-item-title">
							<p class ="home-blog-title">
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
