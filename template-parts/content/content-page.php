<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<div class="container">
	<div class="row py-3">
		<div class="col-sm-12 col-md-9" id="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
					
					<header class="entry-header mt-0">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</header>
				<?php endif; ?>

				<div class="entry-content">
					<div class="input-full-width">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</div>
				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Post title. Only visible to screen readers. */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		<div class="col-sm-12 col-md-3 pl-0 pr-0">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-black">
						<div class="normal-header">Hỗ Trợ Tư Vấn</div>
					</div>
					<div style="border: 1px solid;">
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
			
				<div class="col-md-12 mt-2">
					<div class="bg-black">
						<div class="normal-header">Gửi Liên Hệ</div>
					</div>
					<div style="border: 1px solid;padding-left: 5px;padding-right: 5px;" class="contact-form">
						<?php
						echo do_shortcode('[wpforms id="33"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
