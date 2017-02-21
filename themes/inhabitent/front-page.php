<?php /* Template Name: front-page*/ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
			<div class = "front-hero-image">
  <div class = "front-logo-image"></div>
</div>

<h2 class = "home-content-heading">Shop Stuff</h2>
<section></section>
<h2 class = "home-content-heading">Inhabitent Journal</h2>
<section></section>
<h2 class = "home-content-heading">Latest Adventures</h2>
<section class = "adventure-wrapper">
  <div class = "adventures-pic-container">
     <div class = "canoe-container">
   
         <div class = "canoe-large-pic adventure-pic">
			 <h3 class ="adventure-text"><a>Getting Back to Nature in a Canoe</a></h3>
     </div>
     <div class ="beach-container">
          <div class = "beach-medium-pic adventure-pic">
			  <h3 class ="adventure-text"><a>A Night with Friends at the Beach</a></h3>
		  </div>
     </div>
     <div class ="mountain-container">

         <div class ="mountain-small-pic adventure-pic">
			 <h3 class ="adventure-text"><a>Taking in the View at Big Mountain</a></h3>
		 </div>
     </div>
     <div class ="star-container">
         <div class ="star-small-pic adventure-pic">
			 <h3 class ="adventure-text"><a>Star-Gazing at the Night Sky</a></h3>
		 </div>
     </div>

  </div>
</section>
   

       



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>