<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Cache-control" content="no-cache">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anton" />
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="JJteMrfC"></script>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header' : 'site-header'; ?>">
			<div class="top-header-info">
				<div>
					<?php if ( has_custom_logo() ) : ?>

						<?php the_custom_logo(); ?>
					<?php endif; ?>
				</div>
				<div>
					<div style="font-size: 44px;font-family: Anton;color: #2377f8;letter-spacing: 1px;">CỬA HÀNG SẮT THÉP GIA ĐẠT KIÊN GIANG</div>
					<div>Chuyên phân phối sắt thép xây dựng, thép hộp, thép hình từ các nhà máy thép uy tín. </div>
					<div>
						Địa chỉ: Lô F13-15,16,17 Đường 3/2, Phường Vĩnh Lạc, TP. Rạch Giá, Kiên Giang.
					</div>
					<div>
						<span>Email: thepgiadat@gmail.com</span>
						<span>&nbsp;&nbsp;&nbsp;</span>
						<span>Điện thoại: 081 762 7575</span>
					</div>
				</div>
			</div>
			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .site-branding-container -->
		</header>

	<div id="content" class="site-content">
