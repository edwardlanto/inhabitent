<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				 <div class="footer-blocks">
                    <div class="orange-footer-text col-lg-4 col-sm-12">
                        <h3>Contact Info</h3>
                        <div>
                            <i class="fa fa-envelope icon" aria-hidden="true"></i>
                            <a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
                        </div>
                        <div>
                            <i class="fa fa-phone icon" aria-hidden="true"></i>
                            <a href="tel:778-456-7891">778-456-7891</a>
                        </div>
                        <div>
                            <span>
                                <a href="#"><i class="fa fa-facebook-square icon" aria-hidden="true"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa fa-twitter-square icon" aria-hidden="true"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa fa-google-plus-square icon" aria-hidden="true"></i></a>
                            </span>
                    </div>
                    </div><!--Contact  -->
                    <div class="orange-footer-text col-lg-4 col-sm-12">
                        <h3>Business Hours</h3>
                        <p><span class ="date-bold">Monday-Friday:</span> 9am to 5pm</p>
                        <p><span class ="date-bold">Saturday:</span> 10am to 2pm</p>
                        <p><span class ="date-bold">Sunday:</span> Closed</p>        
                    </div><!--orange-footer-text-->
                    <div class="text-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Image of Inhabitent logo" />
                        </a>
                    </div><!-- text-logo -->        
                </div><!--footer-blocks -->
            </footer>
                

		<?php wp_footer(); ?>
