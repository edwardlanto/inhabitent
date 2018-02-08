  <?php /* Template Name: front-page*/ ?>

  <?php
  /**
  * The template for displaying all pages.
  *
  * @package RED_Starter_Theme
  */

  get_header(); ?>
    <header class = "sticky-header">
        <div class="sticky-logo-container">
          <img src="<?php echo get_template_directory_uri();?>/images/logo-tent.svg" class = "sticky-header-logo" alt="tent-logo"/>
        </div><!--sticky-logo-container-->
        <div class= "sticky-header-nav">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              <?php esc_html( 'Primary Menu' ); ?>
            </button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            <div class ="home-search-container">  
              <?php get_search_form(); ?>
            </div><!-- Home search container-->
			  </div><!--Sticky Header Nav-->
    </header>
      <div class = "front-hero-image">
        <div class = "front-logo-image"></div>
      </div><!--front-hero-image-->
      <h2 class = "home-content-heading">Shop Stuff</h2>
      <div class = "page-container container">
        <?php $terms = get_terms( array(
          'taxonomy'=>'product_type',
          'orderby'=>'name',
          'hide_empty'=>'false'
          ));?>
  <div class ="block-wrapper-container">
      <?php
      foreach($terms as $term):
      $url = get_term_link($term,'product_type');?>
      <div class = "block-wrapper col-lg-3 col-md-6 col-sm-12">
        <div class ="logo-container">
          <img src="<?php echo get_template_directory_uri();?>/images/product-type-icon/<?php echo $term->slug; ?>.svg" class = "shop-image" alt="type-logo">
        </div><!--logo-container-->
        <div class ="logo-description">
          <?php echo $term->description ?>
        </div><!--logo-description-->
        <div class = "more-button-container">
          <a href ="<?php echo $url ?>" class = "more-button"><?php echo $term->name . " Stuff";?></a>
        </div><!--more-button-container-->
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
    <div class = "home-blog-post-container col-lg-4">
        <div class = "home-blog-post"><?php the_post_thumbnail( 'large' ); ?></div>
        <div><p class ="home-blog-text"><?php red_starter_posted_on(); ?>/<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p></div>
        <div><h3 class ="home-blog-title"><a href = "<?php the_permalink(); ?>  "><?php the_title(); ?></a></h3></div>
        <a href="<?php the_permalink()?>" class ="read-entry-home">Read Entry</a>
    </div><!--home-blog-post-container-->
    <?php endforeach; 
    wp_reset_postdata(); ?>
</div><!--page-container-->
</div>
  <?php get_footer(); ?>