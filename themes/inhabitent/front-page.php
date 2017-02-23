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
<?php $terms = get_terms( array(
  'taxonomy'=>'product_type',
  'orderby'=>'name',
  'hide_empty'=>'false'
));
?><div class ="block-wrapper-container"><?php
foreach($terms as $term):
$url = get_term_link($term ->slug. 'product_type');

  ?>

  <div class "block-wrapper">
    <img src="<?php echo get_template_directory_uri();?>/images/product-type-icon/<?php echo $term->slug; ?>.svg" class = "shop-image">
    <?php echo $term->description ?>
  </div>

<?php endforeach; ?>
</div>


<h2 class = "home-content-heading">Inhabitent Journal</h2>


<!--Blog Post Loop-->
<div class = "inhabitents-front-post">
<?php
$args = array( 'numberposts' => 3, 'order' => 'DESC', 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ) :
  setup_postdata($post); ?>

  <div class = "home-blog-post-container">
	    <div class = "home-blog-post"><?php the_post_thumbnail( 'large' ); ?></div>
      <div><p class ="home-blog-text"><?php red_starter_posted_on(); ?></p></div>
      <div><h3 class ="home-blog-title"><a><?php the_title(); ?></a></h3></div>
      <a href="" id ="read-entry-home">Read Entry  -></a>
  </div>

<?php endforeach; 
wp_reset_postdata(); ?>


</div>



<!--Latest Adventures-->
<h2 class = "home-content-heading">Latest Adventures</h2>
<section class = "adventure-wrapper">
  <div class = "adventures-pic-container">
     <div class = "canoe-container">
   
         <div class = "canoe-large-pic adventure-pic">
			 <h3 class ="adventure-text canoe-text"><a>Getting Back to Nature in a Canoe</a></h3>
     </div>
     <div class ="beach-container">
          <div class = "beach-medium-pic adventure-pic">
			  <h3 class ="adventure-text"><a class = "beach-text">A Night with Friends at the Beach</a></h3>
		  </div>
     </div>
     <div class ="mountain-container">

         <div class ="mountain-small-pic adventure-pic">
			 <h3 class ="adventure-text mountain-text"><a>Taking in the View at Big Mountain</a></h3>
		 </div>
     </div>
     <div class ="star-container">
         <div class ="star-small-pic adventure-pic">
			 <h3 class ="adventure-text star-text"><a>Star-Gazing at the Night Sky</a></h3>
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