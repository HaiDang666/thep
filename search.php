<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div class="content-area">
	<div class="row">
		<?php
			get_template_part( 'template-parts/content/content', 'leftbar' );
		?>
		<div class="col-sm-12 col-md-7">
			<div id="primary" class="content-area mb-2">		
				<main id="main" class="site-main ">

				<?php if ( have_posts() ) : ?>

					<header class="page-header mr-0 ml-0">
						<h1 class="page-title">
							<?php _e( 'Kết quả tìm kiếm: ', 'twentynineteen' ); ?>
							<span class="page-description"><?php echo get_search_query(); ?></span>
						</h1>
					</header><!-- .page-header -->

					<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that
						* will be used instead.
						*/
						get_template_part( 'template-parts/content/content', 'excerpt' );

						// End the loop.
					endwhile;

					// Previous/next page navigation.
					twentynineteen_the_posts_navigation();

					// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content/content', 'none' );

				endif;
				?>
				</main><!-- #main -->


			</div><!-- #primary -->
		</div>
		<?php
			get_template_part( 'template-parts/content/content', 'rightbar' );
		?>
	</div>
</div>
<?php
get_footer();
