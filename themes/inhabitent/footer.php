<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>


			<footer id="colophon" class="site-footer" role="contentinfo">
				 <div class="footer-blocks">
                    <div class="contact">
                        <h3 class="orange-footer-text">Contact Info</h3>
                        <p>
                            <i class="fa fa-envelope icon" aria-hidden="true"></i>
                            <a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
                        </p>
                        <p>
                            <i class="fa fa-phone icon" aria-hidden="true"></i>
                            <a href="tel:778-456-7891">778-456-7891</a>
                        </p>
                        <p>
                            <span>
                                <a href="#"><i class="fa fa-facebook-square icon" aria-hidden="true"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa fa-twitter-square icon" aria-hidden="true"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa fa-google-plus-square icon" aria-hidden="true"></i></a>
                            </span>
                        </p>
                    </div><!--Contact  -->
                    <div class="orange-footer-text">
                            <h3>Business Hours</h3>
                            <p><span class ="date-bold">Monday-Friday:</span> 9am to 5pm</p>
                            <p><span class ="date-bold">Saturday:</span> 10am to 2pm</p>
                            <p><span class ="date-bold">Sunday:</span> Closed</p>        
                    </div><!--business-hour-->
                    <div class="text-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Image of Inhabitent logo" />
                            </a>
                    </div><!-- text-logo -->        
					<div class="site-info-container">
                    	<p>Copyright &copy; 2016 Inhabitent</p>
                	</div>    
                    </div>    
                </div><!--footer-blocks -->
                

		<?php wp_footer(); ?>

	</body>
</html>
