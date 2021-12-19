<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="row">
				<div class="contact-block col-sm-12 col-md-4">
					<div class="contact-header">
						Liên Hệ
					</div>
					<li class="no-bullets">
						<ul>
							<div>Nhân viên kinh doanh (Mr.Dung)</div>
							<div>
								<i class="fas fa-phone-square">
									<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg"/>
								</i>
								0123456789
							</div>
						</ul>
						<ul>
							<div>Nhân viên bán hàng (Mr.Dung)</div>
							<div>
								<i class="fas fa-phone-square">
									<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg"/>
								</i>
								0123456789
							</div>
						</ul>
						<ul>
							<div>Nhân viên bán hàng (Mr.Dung)</div>
							<div>
								<i class="fas fa-phone-square">
									<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg"/>
								</i>
								0123456789
							</div>
						</ul>
					</li>
					<div class="contact-header">
						Facebook
					</div>
					<div class="text-center">
						<div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100076226703186" data-tabs="" data-width="350" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
							<blockquote cite="https://www.facebook.com/profile.php?id=100076226703186" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/profile.php?id=100076226703186">Thép Gia Đạt Kiên Giang</a>
							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-8 product-block">
					<div class="store-callout large col-sm-12 col-md-6 col-lg-12">
						<div class="store-callout-image">
							<img src="https://www.steelsupplylp.com/uploads/general/_508x304_crop_top-center_100_none/40760/homepage-ss-store-callout-background.jpg" />
						</div>
						<div class="store-callout-content">
							Structural Steel Online
							<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
							<a href="https://www.google.com" class="more-btn-wrapper">
								<div class="more-btn">Xem thêm</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
							<div class="store-callout-image">
								<img src="https://www.steelsupplylp.com/uploads/general/_322x193_crop_top-center_100_none/homepage-pf-store-callout-bg.jpg" />
							</div>
							<div class="store-callout-content">
								Pipe Fittings
								<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
								<a href="https://www.google.com" class="more-btn-wrapper">
									<div class="more-btn">Xem thêm</div>
								</a>
							</div>
						</div>
						<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
							<div class="store-callout-image">
								<img src="https://www.steelsupplylp.com/uploads/general/_322x193_crop_top-center_100_none/homepage-pf-store-callout-bg.jpg" />
							</div>
							<div class="store-callout-content">
								Welding Supplies
								<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
								<a href="https://www.google.com" class="more-btn-wrapper">
									<div class="more-btn">Xem thêm</div>
								</a>
							</div>
						</div>
						<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
							<div class="store-callout-image">
								<img src="https://www.steelsupplylp.com/uploads/general/_322x193_crop_top-center_100_none/homepage-pf-store-callout-bg.jpg" />
							</div>
							<div class="store-callout-content">
								Ornamental Iron
								<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
								<a href="https://www.google.com" class="more-btn-wrapper">
									<div class="more-btn">Xem thêm</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row pt-3">
				<div class="contact-block col-sm-12 col-md-4">
					<div class="contact-header"> 
						Vị Trí
					</div>
					<div class="p-2">
						Địa chỉ: Số ABC, đường 3 tháng 2, phường Vĩnh Lạc, Trạch Giá, Kiên Giang.
					</div>
					<div class="p-2 text-primary">
						<i class="fa fa-map" aria-hidden="true"></i> Xem trên Google Map 
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.644765827814!2d106.6990189!3d10.7797855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe84f59936ced5b45!2sNotre%20Dame%20Cathedral%20of%20Saigon!5e0!3m2!1sen!2s!4v1639796146514!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>

			<div class="row pt-3 mb-3">
				<div class="col-sm-12 col-md-12 pl-0 pr-0 mb-2">
					<span class="store-picture-title"> Hình Ảnh Cửa Hàng </span>
				</div>
				<div class="col-md-12 pl-0 pr-0" style="max-height: 400px;">
					<?php 
						echo do_shortcode('[slide-anything id="17"]');
					?>
				</div>
			</div>
		</main>
	</div>

<?php
get_footer();
