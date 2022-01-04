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

			<div class="col-sm-12 col-md-9">
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
								<div class="product-box">
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
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
							<div class="product-box">
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
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
							<div class="product-box">
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
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
							<div class="product-box">
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
					</div>

					<!-- hinh anh cua hang -->
					<div class="contact-block col-sm-12 col-md-12 mt-2">
						<div class="contact-header">
							Hình Ảnh Cửa Hàng
						</div>
					</div>
					<div class="col-md-12 store-picture-slider" id="slide-anything55">
						<?php
						echo do_shortcode('[slide-anything id="55"]');
						?>
					</div>

					<!-- thi cong xay dung -->
					<div class="contact-block col-sm-12 col-md-12 mt-2">
						<div class="contact-header">
							Phục Vụ Công Trình
						</div>
					</div>
					<div class="col-sm-12 col-md-12 product-block mb-3">
						<div class="row">
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="project-box">
									<div class="store-callout-image">
										<img src="https://thepgiadat.com/wp-content/uploads/2021/12/KSDC-front.jpg" style="height: 180px;width: 100%;"/>
									</div>
									<div class="project-text">
										<a class="project-link" href="https://thepgiadat.com/khao-sat-dia-chat-dia-hinh/">Nhà ở Anh Chức</a>
									</div>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="project-box">
									<div class="store-callout-image">
										<img src="https://thepgiadat.com/wp-content/uploads/2021/12/COC_NHOI-front.jpg" style="height: 180px;width: 100%;"/>
									</div>
									<div class="project-text">
										<a class="project-link" href="https://thepgiadat.com/khoan-coc-nhoi/">Nhà ở Anh Chức</a>
									</div>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="project-box">
									<div class="store-callout-image">
										<img src="https://thepgiadat.com/wp-content/uploads/2021/12/NHA_YEN-front.jpg" style="height: 180px;width: 100%;"/>
									</div>
									<div class="project-text">
										<a class="project-link" href="https://thepgiadat.com/xay-dung-nha-yen/">Nhà ở Anh Chức</a>
									</div>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="project-box">
									<div class="store-callout-image">
										<img src="https://thepgiadat.com/wp-content/uploads/2021/12/NHA_O-front.jpg" style="height: 180px;width: 100%;"/>
									</div>
									<div class="project-text">
										<a class="project-link" href="https://thepgiadat.com/xay-dung-nha-o/">Nhà ở Anh Chức</a>
									</div>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="project-box">
									<div class="store-callout-image">
										<img src="https://thepgiadat.com/wp-content/uploads/2021/12/EP_COC-front.jpg" style="height: 180px;width: 100%;"/>
									</div>
									<div class="project-text">
										<a class="project-link" href="https://thepgiadat.com/ep-coc/">Nhà ở Anh Chức</a>
									</div>
								</div>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
								<div class="project-box">
									<div class="store-callout-image">
										<img src="https://thepgiadat.com/wp-content/uploads/2021/12/BO_KE-front.jpg" style="height: 180px;width: 100%;"/>
									</div>
									<div class="project-text">
										<a class="project-link" href="https://thepgiadat.com/bo-ke/">Nhà ở Anh Chức
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- right bar --->
			<div class="col-sm-12 col-md-3 pl-0 pr-0 mb-3">
				<div class="row ml-0 mr-0">
					<div class="col-md-12">
						<div class="rightbar-box">
							
								<div class="bg-black">
									<div class="normal-header">Hỗ Trợ Tư Vấn</div>
								</div>
								<div>
									<div class="mb-1 mt-1 pl-1">
										<div class="normal-sub-header">Đặt hàng</div>
										<div style="font-size: 20px;text-align: center;">
											<div><i class="fas fa-phone-square pr-1"></i>02973 86 86 39 </div>
											<div>(Văn phòng)</div>
											<div><i class="fas fa-phone-square pr-1"></i>0817 62 75 75 </div>
											<div>(Mr. Sa)</div>
										</div>
									</div>
								</div>

						</div>
					</div>
				
					<div class="col-md-12 mt-2">
						<div class="rightbar-box">
							<div class="bg-black">
								<div class="normal-header">Gửi Liên Hệ</div>
							</div>
							<div style="padding-left: 5px;padding-right: 5px;" class="contact-form" id="wpforms33">
								<?php
								echo do_shortcode('[wpforms id="38"]');
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
