<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="footer" role="contentinfo" style="background: url('<?php echo get_template_directory_uri() . '/images/dark-wood.png' ?>')">
				<div class="container site-footer" >
					<div class="site-contact">
						<div class="footer-sidebar">
						<h3>CONTACT INFO </h3>
							<p><i class="fas fa-envelope"></i> info@inhabitent.com</p>
							<p><i class="fas fa-phone"></i> 778-456-7891</p>
							<ul>
								<li><i class="fab fa-facebook"></i></a></li>
								<li><i class="fab fa-twitter"></i></a></li>
								<li><i class="fab fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="footer-sidebar">
						<h3>BUSINESS HOURS </h3>
							<p><span>Monday - Friday :</span> 9am to 5 pm</p>
							<p><span>Saturday :</span>10am to 2pm</p>
							<p><span>Sunday :</span>Closed</p>
						</div>
					</div>
					<div class="site-logo" >
						<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="">
					</div>
			</div>
			<p class="copyright">COPYRIGHT © 2019 INHABITENT</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>

	</body>
</html>
