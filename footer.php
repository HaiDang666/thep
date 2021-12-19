<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	</div><!-- #content -->
	<div class="float-contact">
		<div class="float-contact-btn-wrapper">
			<button class="chat-zalo">
				<a href="http://zalo.me/123456890">Chat Zalo</a>
			</button>
		</div>
		<div class="float-contact-btn-wrapper">
			<button class="chat-face">
				<a href="http://m.me/moosun.vn">Chat Facebook</a>
			</button>
		</div>
		<div class="float-contact-btn-wrapper">
			<button class="hotline">
				<a href="tel:123456890">Hotline: 123456890</a>
			</button>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
			<div style="font-size: 13px;">
				<?php $blog_info = get_bloginfo( 'name' ); ?>
				<?php if ( ! empty( $blog_info ) ) : ?>
					<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
				<div>Số ABC, đường 3 tháng 2, phường Vĩnh Lạc, Trạch Giá, Kiên Giang. </div>
				<div>Hotline: 0123456789, Hotline: 0123456789</div>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
