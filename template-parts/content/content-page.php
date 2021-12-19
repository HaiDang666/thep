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
		<div class="col-3 pl-0 pr-0" style="max-height: 287px"  id="sticky-sidebar">
			<div class="sticky-top">
				<div class="contact-header pt-1 pb-1">
					Ho tro khach hang
				</div>
				<li class="no-bullets">
					<ul>
						<div>Nhan vien Ban hang (Dung)</div>
						<div>
							<i class="fas fa-phone-square">
								<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg"/>
							</i>
							0123456789
						</div>
					</ul>
					<ul>
						<div>Nhan vien Ban hang (Dung)</div>
						<div>
							<i class="fas fa-phone-square">
								<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg"/>
							</i>
							0123456789
						</div>
					</ul>
					<ul>
						<div>Nhan vien Ban hang (Dung)</div>
						<div>
							<i class="fas fa-phone-square">
								<img class="zalo-icon" src="https://page.widget.zalo.me/static/images/2.0/Logo.svg"/>
							</i>
							0123456789
						</div>
					</ul>
				</li>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col" id="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
					
				<header class="entry-header">
					<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				</header>
				<?php endif; ?>

				<div class="entry-content">
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
	</div>
</div>
