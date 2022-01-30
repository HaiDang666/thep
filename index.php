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
								<a href="https://thepgiadat.com/thep-xay-dung/" class="noUnderline">
									<div class="product-box">
										<div class="store-callout-image">
											<img src="https://thepgiadat.com/wp-content/uploads/2021/12/THEP-XD.png" style="height: 167px;width: 100%;"/>
										</div>
										<div class="store-callout-content">
											Thép Xây Dựng
										</div>
									</div>
								</a>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<a href="https://thepgiadat.com/be-dai-tai-de/" class="noUnderline">
									<div class="product-box">
										<div class="store-callout-image">
											<img src="https://thepgiadat.com/wp-content/uploads/2021/12/BE-DAI.jpg" style="height: 167px;width: 100%;"/>
										</div>
										<div class="store-callout-content">
											Bẻ Đai - Tai Dê
										</div>
									</div>
								</a>
							</div>
							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<a href="https://thepgiadat.com/thep-hop-vuong-2/" class="noUnderline">
									<div class="product-box">
										<div class="store-callout-image">
											<img src="https://thepgiadat.com/wp-content/uploads/2021/12/THEP-HOP-VUONG.jpg" style="height: 167px;width: 100%;"/>
										</div>
										<div class="store-callout-content">
											Thép Hộp Vuông
										</div>
									</div>
								</a>
							</div>

							<div class="store-callout-small small col-sm-12 col-md-6 col-lg-3">
								<a href="https://thepgiadat.com/thep-hop-chu-nhat-2/" class="noUnderline">
									<div class="product-box">
										<div class="store-callout-image">
											<img src="https://thepgiadat.com/wp-content/uploads/2021/12/THEP-HOP-CHU-NHAT.jpg" style="height: 167px;width: 100%;"/>
										</div>
										<div class="store-callout-content">
											Thép Hộp Chữ Nhật
										</div>
									</div>
								</a>
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
							<?php
								$args = array(
									'numberposts' => 6,
									'category' => 3
								);
							
								$str = "";
								$posts = get_posts($args);
							
								foreach($posts as $post):
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							?>
								<div class="store-callout-small small col-sm-12 col-md-6 col-lg-4">
									<div class="project-box">
										<div class="store-callout-image">
											<img src="<?php echo $image[0]; ?>" style="height: 180px;width: 100%;"/>
										</div>
										<div class="project-text">
											<a class="project-link" href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a>
										</div>
									</div>
								</div>
							
							<?php
								endforeach;
							?>
					
							
						</div>
					</div>
				</div>
			</div>

			<!-- right bar --->
			<?php
				get_template_part( 'template-parts/content/content', 'rightbar' );
			?>
		</div>
	</main>
</div>

<?php
get_footer();
