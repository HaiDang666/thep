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

			<div class="col-sm-12 col-md-10">
				<div class="row">
					<!-- san pham noi bat -->
					<div class="contact-block col-sm-12 col-md-12">
						<div class="contact-header">
							Sản Phẩm Nổi Bật
						</div>
					</div>
					<div class="col-sm-12 col-md-12 product-block">
						<div class="row">
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/THEP-XD.png" style="height: 167px;width: 100%;"/>
								</div>
								<div class="store-callout-content">
									Thép Xây Dựng
									<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
									<a href="https://www.google.com" class="more-btn-wrapper">
										<div class="more-btn">Xem thêm</div>
									</a>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/BE-DAI.jpg" style="height: 167px;width: 100%;"/>
								</div>
								<div class="store-callout-content">
									Bẻ Đai - Tai Dê
									<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
									<a href="https://www.google.com" class="more-btn-wrapper">
										<div class="more-btn">Xem thêm</div>
									</a>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/THEP-HOP-VUONG.jpg" style="height: 167px;width: 100%;"/>
								</div>
								<div class="store-callout-content">
									Thép Hộp Vuông
									<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
									<a href="https://www.google.com" class="more-btn-wrapper">
										<div class="more-btn">Xem thêm</div>
									</a>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/THEP-HOP-CHU-NHAT.jpg" style="height: 167px;width: 100%;"/>
								</div>
								<div class="store-callout-content">
									Thép Hộp Chữ Nhật
									<div class="store-callout-description">Cung cấp các loại thép abc, sắt xyz và ...</div>
									<a href="https://www.google.com" class="more-btn-wrapper">
										<div class="more-btn">Xem thêm</div>
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- hinh anh cua hang -->
					<div class="contact-block col-sm-12 col-md-12 mt-2">
						<div class="contact-header">
							Hình Ảnh Cửa Hàng
						</div>
					</div>
					<div class="col-md-12">
						<?php
						echo do_shortcode('[slide-anything id="17"]');
						?>
					</div>

					<!-- thi cong xay dung -->
					<div class="contact-block col-sm-12 col-md-12 mt-2">
						<div class="contact-header">
							Thi Công Xây Dựng
						</div>
					</div>
					<div class="col-sm-12 col-md-12 product-block">
						<div class="row">
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/thep2.jpg" />
								</div>
								<div class="project-text">
									Khảo sát địa chất, địa hình
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/thep2.jpg" />
								</div>
								<div class="project-text">
									Khoan cọc nhồi
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/thep2.jpg" />
								</div>
								<div class="project-text">
									Xây dựng nhà yến
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/thep2.jpg" />
								</div>
								<div class="project-text">
									Xây dựng nhà ở
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/thep2.jpg" />
								</div>
								<div class="project-text">
									Ép cọc
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="store-callout-image">
									<img src="https://thepgiadat.com/wp-content/uploads/2021/12/thep2.jpg" />
								</div>
								<div class="project-text">
									Bờ kè
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- right bar --->
			<div class="col-sm-12 col-md-2 pl-0 pr-0">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-black">
							<div class="normal-header">Hỗ Trợ Tư Vấn</div>
						</div>
						<div style="border: 1px solid;">
							<div class="mb-1 mt-1 pl-1">
								<div class="normal-sub-header">Đặt hàng</div>
								<div style="font-size: 20px;">
									<div><i class="fas fa-phone-square pr-1"></i>02973 86 86 39 </div>
									<div>(SĐT Văn phòng)</div>
									<div><i class="fas fa-phone-square pr-1"></i>0817 62 75 75 </div>
									<div>(Mr. Sa)</div>
								</div>
							</div>
							<div class="mb-1 mt-1 pl-1">
								<div class="normal-sub-header">Thi công <br /> xây dựng</div>
								<div style="font-size: 20px;">
									<div><i class="fas fa-phone-square pr-1"></i>097 777 62 82</div>
									<div>(Mr. Tuấn Anh)</div>
									<div><i class="fas fa-phone-square pr-1"></i>098 97 97 108 </div>
									<div>(Mr. Sa)</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="col-md-12 mt-2">
						<div class="bg-black">
							<div class="normal-header">Gửi Liên Hệ</div>
						</div>
						<div style="border: 1px solid;">

						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
