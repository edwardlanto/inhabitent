<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>


			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class = "contact-container">
				<h3 class = "contact-footer">Contact Info</h3>
				<a class =  "white-contact-text">info@inhabitent.com</a>
				<a class = "white-contact-text">778-456-7891</a>
			</span>
			</div>
			<div class = "business-container">
				<h3 class = "business-footer">Business Hours</h3>
				<p class ="date-footer">Monday-Friday:9am to 5pm;</p>
				<p class ="date-footer">Sunday:Closed</p>
			</div>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
