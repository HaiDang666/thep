<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<section class="no-results not-found">
	<header class="page-header mr-0 ml-0">
		<h1 class="page-title"><?php _e( 'Không tìm thấy nội dung', 'twentynineteen' ); ?></h1>
	</header><!-- .page-header -->

	<div class="xyz">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentynineteen' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php _e( 'Vui lòng thử lại với từ khoá khác.', 'twentynineteen' ); ?></p>
			<form role="search" method="get" action="https://thepgiadat.com/">
				<div class="searchBox">
					<input type="search" placeholder="Nhập từ khoá" name="s">
					<!-- <input  class="search-field"> -->
					<button type="submit" class="btn">Tìm kiếm</button>
				</div>
			</form>
			
		<?php else : ?>

			<p><?php _e( 'Vui lòng thử lại với từ khoá khác.', 'twentynineteen' ); ?></p>
			<form role="search" method="get" action="https://thepgiadat.com/">
				<div class="searchBox">
					<input type="search" placeholder="Nhập từ khoá" name="s">
					<!-- <input  class="search-field"> -->
					<button type="submit" class="btn">Tìm kiếm</button>
				</div>
			</form>
			
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
