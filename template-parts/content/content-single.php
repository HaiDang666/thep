<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (!twentynineteen_can_show_post_thumbnail()) : ?>
		<header class="entry-header mt-0">
			<?php get_template_part('template-parts/header/entry', 'header'); ?>
		</header>
	<?php endif; ?>
	<header class="entry-header mt-0">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __('Pages:', 'twentynineteen'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div>
			<h3 class="anton-text">DNTN THÉP GIA ĐẠT</h3>
			<div>
				<i class="fas fa-map pr-1"></i>Địa chỉ: Lô F13-15,16,17 Đường 3/2, Phường Vĩnh Lạc, TP. Rạch Giá, Kiên Giang.
			</div>
			<div>
				<div style="text-transform: uppercase;">Đặt hàng</div>
				<ul class="mb-0">
					<li>
						<a target="_blank" href="tel:02973868639">
							<i class="fas fa-phone-square pr-1"></i>Điện thoại: 02973 86 86 39 (Văn phòng)
						</a>
					</li>
					<li>
						<a target="_blank" href="tel:0817627575">
							<i class="fas fa-phone-square pr-1"></i>Điện thoại: 081 762 7575 (Mr. Sa)
						</a>
					</li>
				</ul>
			</div>
			<div>
				<div style="text-transform: uppercase;">Thi công xây dựng</div>
				<ul class="mb-0">
					<li>
						<a target="_blank" href="tel:0977776282">
							<i class="fas fa-phone-square pr-1"></i>Điện thoại: 097 777 62 82 (Mr. Tuấn Anh)
						</a>
					</li>
					<li>
						<a target="_blank" href="tel:0989797108">
							<i class="fas fa-phone-square pr-1"></i>Điện thoại: 098 97 97 108 (Mr. Sa)
						</a>
					</li>
				</ul>
			</div>
			<div>
				<i class="fas fa-envelope pr-1"></i>Email: thepgiadat@gmail.com
			</div>
		</div>
		<!-- <?php twentynineteen_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->

	<?php if (!is_singular('attachment')) : ?>
		<?php get_template_part('template-parts/post/author', 'bio'); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->