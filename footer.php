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
				<a target="_blank" href="http://zalo.me/0817627575">
					<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg">
					Zalo
				</a>
			</button>
		</div>
		<div class="float-contact-btn-wrapper">
			<button class="chat-face">
				<a target="_blank" href="http://m.me/100076226703186">
					<i class="fa fa-facebook-official fs-20" aria-hidden="true"></i>
					Messenger
				</a>
			</button>
		</div>
		<div class="float-contact-btn-wrapper">
			<button class="hotline">
				<a target="_blank" href="tel:0817627575">
					<i class="fas fa-phone-square pr-1 fs-20"></i>
					Hotline: 0817627575
				</a>
			</button>
		</div>
	</div>

	<footer id="colophon" class="site-footer bg-black pb-5">
		<div class="site-info content-area pt-2">
			<div style="color: gray;">
				<span style="font-weight: bolder;color: white;">Từ khoá: </span>
				Bẻ đai | Thép hộp vuông | Thép hộp chữ nhật | Thép xây dựng | Báo giá | Khảo sát địa chất | Khoan cọc nhồi | Ép cọc | Bờ kè | Xây dựng nhà ở | Xây dựng nhà yến
			</div>
			<div class="pb-2" style="border-bottom: 1px solid;">
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
			</div>
			<div class="row pt-3">
				<div class="col-sm-12 col-md-4">
					<div>
						<h3 class="anton-text">DNTN THÉP GIA ĐẠT</h3>
						<div>
							<i class="fas fa-map pr-1"></i>Địa chỉ: Lô F13-15,16,17 Đường 3/2, Phường Vĩnh Lạc, TP. Rạch Giá, Kiên Giang.
						</div>
						<div>
							<a target="_blank" href="tel:0817627575">
								<i class="fas fa-phone-square pr-1"></i>Điện thoại: 081 762 7575
							</a>
						</div>
						<div>
							<i class="fas fa-envelope pr-1"></i>Email: thepgiadat@gmail.com
						</div>
						<div class="bct">
							<img src="https://thepgiadat.com/wp-content/uploads/2022/01/DTB.webp">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div>
						<div class="anton-text">Bản Đồ</div>
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.3693177851246!2d105.08750231479401!3d9.98632039286055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0b5ed6eb297bb%3A0xcdd2719138d107d5!2zRE5UTiBUaMOpcCBHaWEgxJDhuqF0!5e0!3m2!1sen!2s!4v1640414073756!5m2!1sen!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div>
						<div class="anton-text">Facebook</div>
						<div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100076226703186" data-tabs="" data-width="350" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
							<blockquote cite="https://www.facebook.com/profile.php?id=100076226703186" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/profile.php?id=100076226703186">Thép Gia Đạt Kiên Giang</a>
							</blockquote>
						</div>
					</div>
				</div>
			</div>

		</div><!-- .site-info -->


	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
