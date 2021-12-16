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
				<div class="col-sm-12 col-md-4 contact-block">
					contacts
				</div>
				<div class="col-sm-12 col-md-8 product-block">
					<div class="col-sm-12 col-md-6 col-lg-12">steel 12</div>
					<div class="col-sm-12 col-md-6 col-lg-12">steel 4</div>
					<div class="col-sm-12 col-md-6 col-lg-12">steel 4</div>
					<div class="col-sm-12 col-md-6 col-lg-12">steel 4</div>
				</div>
			</div>

		</main>
	</div>

<?php
get_footer();
