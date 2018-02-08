<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
<div class="  container">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <div class = "text-data-single-page">
            <?php get_template_part( 'template-parts/content', 'single' ); ?>
            </div>
        <div class ="social-icons-container">
            <button class ="facebook-button" type="button" value ="Like">
                <i class="fa fa-facebook" aria-hidden="true">
                    <span class = "button-text social-button">Like</span>
                </i>
            </button>
            <button class ="pinterest-button" type="button" value ="Tweet">
                <i class="fa fa-twitter" aria-hidden="true">
                    <span class = "button-text social-button">Tweet</span>
                </i>
            </button>
            <button class ="twitter-button" type="button" value ="Pin">
                <i class="fa fa-pinterest" aria-hidden="true">
                    <span class = "button-text social-button">Pin</span>
                </i>
            </button>
        </div>
        <!--<button href="#" id="close-comments">Close Comments</button>-->
         
            <?php
                if ( comments_open() || get_comments_number() ) :
                
                    comments_template();
                endif;
            ?>
            <p>Want to join the discussion? Feel free to contribute!</p>
        <?php endwhile; // End of the loop. ?>

    </div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>