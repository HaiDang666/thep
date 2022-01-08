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
		<?php
			get_template_part( 'template-parts/content/content', 'leftbar' );
		?>
		<div class="col-sm-12 col-md-7" id="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
					
					<header class="entry-header mt-0 ml-0 mr-0">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</header>
				<?php endif; ?>

				<div class="entry-content pr-0 pl-0 mr-0 ml-3">
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
		<?php
			get_template_part( 'template-parts/content/content', 'rightbar' );
		?>
	</div>
</div>
