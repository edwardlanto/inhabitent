<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="image-wrapper">
                    <?php the_post_thumbnail( 'full' ); ?>
                    <div class="single-adventure-container">
                        <div class ="single-adventure-title">
                            <?php the_title(); ?>
                        </div><!--single adventure- title-->
                        <div class = "single-adventure-author">
                            By <?php the_author(); ?>
                        </div><!--single-adventure author-->
                        <div class = "single-adventure-content">
                            <?php the_content(); ?>    
                        </div><!--single-advventure content-->
                    </div><!--single-adventure-container-->
                    </div> <!-- social-media-wrapper -->
                </div> <!-- image-wrapper -->
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
    </div><!-- #primary -->
<?php get_footer(); ?>