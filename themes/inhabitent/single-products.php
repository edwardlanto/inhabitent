<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
    <div class ="page-container container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
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
            
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; // End of the loop. ?>
        

        </main><!-- #main -->
    </div><!-- #primary -->
</div>

<?php get_footer(); ?>