  <?php /* Template Name: front-page*/ ?>

  <?php
  /**
  * The template for displaying all pages.
  *
  * @package RED_Starter_Theme
  */

  get_header(); ?>

    <div id="primary" class="content-area">
      <header class = "sticky-header">
        <div class="sticky-logo-container">
          <img src="<?php echo get_template_directory_uri();?>/images/logo-tent.svg" class = "sticky-header-logo" alt="tent-logo"/>
        </div>
        <div class= "sticky-header-nav">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div><!--Sticky Header Nav-->
        <div class ="home-search-container">  
        <?php get_search_form(); ?>
        </div><!-- Home search container-->
			
      </header>
      <main id="main" class="site-main" role="main">
      <div class = "front-hero-image">
    <div class = "front-logo-image"></div>
  </div>

  <h2 class = "home-content-heading">Shop Stuff</h2>

<div class = "page-container">
  <?php $terms = get_terms( array(
    'taxonomy'=>'product_type',
    'orderby'=>'name',
    'hide_empty'=>'false'
  ));
  ?>
  <div class ="block-wrapper-container">
    <?php
      foreach($terms as $term):
      $url = get_term_link($term,'product_type');
    ?>
      <div class = "block-wrapper">
        <div class ="logo-container">
          <img src="<?php echo get_template_directory_uri();?>/images/product-type-icon/<?php echo $term->slug; ?>.svg" class = "shop-image" alt="type-logo">
        </div>
      <div class ="logo-description">
        <?php echo $term->description ?>
      </div>
      <div class = "more-button-container">
        <a href ="<?php echo $url ?>" class = "more-button"><?php echo $term->name . " Stuff";?></a>
      </div>
  </div><!--block-wrapper-->

  <?php endforeach; ?>
  </div><!--block-wrapper-container-->
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
        <div><p class ="home-blog-text"><?php red_starter_posted_on(); ?>/<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p></div>
        <div><h3 class ="home-blog-title"><a href = "<?php the_permalink(); ?>  "><?php the_title(); ?></a></h3></div>
        <a href="<?php the_permalink()?>" id ="read-entry-home">Read Entry  -></a>
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
        <h3 class ="adventure-text canoe-text"><a href ="#" class = "adventure-hover">Getting Back to Nature in a Canoe</a></h3>
        <div class = "home-read-button-container canoe-read">
            <a class = "home-read-button">Read More</a>
        </div><!--canoe-read-->
      </div>
      
      <div class ="beach-container">
          <div class = "beach-medium-pic adventure-pic">
          <h3 class ="adventure-text"><a class = "beach-text adventure-hover" href="#">A Night with Friends at the Beach</a></h3>
          <div class = "home-read-button-container beach-read">
            <a class = "home-read-button">Read More</a>
          </div>
      </div>
      </div>
      <div class ="mountain-container">
        <div class ="mountain-small-pic adventure-pic">
        <h3 class ="adventure-text mountain-text"><a href="#" class = "adventure-hover">Taking in the View at Big Mountain</a></h3>
        <div class = "home-read-button-container mountain-read">
          <a class = "home-read-button">Read More</a>
        </div>
      </div>
      </div>
      <div class ="star-container">
          <div class ="star-small-pic adventure-pic">
          <h3 class ="adventure-text star-text"><a href="#" class = "adventure-hover">Star-Gazing at the Night Sky</a></h3>
          <div class = "home-read-button-container star-read">
            <a class = "home-read-button">Read More</a>
          </div>
      </div>
      </div>
      </div>
      
  </section>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php endwhile; // End of the loop. ?>
    </main><!-- #main -->
    </div><!-- #primary -->
  </div>

  <?php get_footer(); ?>