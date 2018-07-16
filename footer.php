<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Manuia Polynesian Revue
 * @since Manuia Polynesian Revue
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
                    <div class="footer-contact">
                        <p><a href="mailto:Manuia00@yahoo.com" target="blank">Manuia00@yahoo.com</a> | (650) 755-7200 </p>
                     </div>

					<p>&copy; <?php bloginfo('title'); ?>
                    
       				</div>

				<nav class="social-media-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
