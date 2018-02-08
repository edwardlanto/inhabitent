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
				the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<div class="archive-grid-container">
				<ul class ="archive-adventure-container">
				<?php $loop = new WP_Query( array( 
        'post_type' => 'adventure',   /* edit this line */
        'posts_per_page' => 4,
        'order' => 'ASC' ) );?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li>
						<div class="adventure-container">
							<div class ="adventure-archive-image-container">
								<?php the_post_thumbnail( 'full' ) ?>
							</div><!--adventure-archive-image-container-->
							<div class="adventure-info-wrapper">
								<h2>	
									<a href = "<?php the_permalink();?>" class ="archive-adventure-title">
										<?php the_title(); ?>
									</a>
								</h2>
								<a href ="<?php the_permalink();?>"class = "home-read-button-container archive-read">Read More</a>
							</div><!--adventure-info-container-->
						</div><!--adventure-container-->
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- #primary -->
<?php get_footer(); ?>