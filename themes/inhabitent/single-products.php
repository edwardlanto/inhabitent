<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
    <div class ="page-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">
        <p class = "product-price"><?php echo CFS()->get('price');?></p>
        
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php the_post_navigation(); ?>
            <div class ="social-icons-container">
            <button class ="facebook-button" type="button" value ="Like">
                <i class="fa fa-facebook" aria-hidden="true">
                    <span class = "button-text">Like</span>
                </i>
            </button>
            <button class ="pinterest-button" type="button" value ="Tweet">
                <i class="fa fa-twitter" aria-hidden="true">
                    <span class = "button-text">Tweet</span>
                </i>
            </button>
            <button class ="twitter-button" type="button" value ="Pin">
                <i class="fa fa-pinterest" aria-hidden="true">
                    <span class = "button-text">Pin</span>
                </i>
            </button>
            

        <?php endwhile; // End of the loop. ?>
        
</div>

<?php get_footer(); ?>