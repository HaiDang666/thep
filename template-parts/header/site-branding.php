<?php

/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<div class="site-branding mb-2">
	<nav id="site-navigation" class="main-navigation" aria-label="Top Menu">
		<div class="menu-main-container">
			<ul id="menu-main" class="main-menu">
				<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-14"><a href="https://thepgiadat.com" aria-current="page">TRANG CHỦ</a></li>
				<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="https://thepgiadat.com/bao-gia/">Báo GIÁ Nhanh</a></li>
				<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="https://thepgiadat.com/">SẢN PHẨM</a></li>
				<li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a href="https://thepgiadat.com/">Hình ảnh cửa hàng</a></li>
				<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="https://thepgiadat.com/cong-trinh-phuc-vu/">Công Trình</a></li>
				<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11"><a href="https://thepgiadat.com/lien-he/">LIÊN HỆ</a></li>
				<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
					<button type="button" class="btn-sss" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-search fs-20" aria-hidden="true"></i>
					</button>
					<div style="display:none;" class="wpbsearchform">
							<form role="search" method="get" action="https://thepgiadat.com/">
						<div class="searchBox">

								<input id="searchField" type="search" placeholder="Nhập từ khoá" name="s">
								<!-- <input  class="search-field"> -->
								<button id="searchBtn" type="submit" class="btn">Tìm kiếm</button>
						</div>

							</form>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Modal -->
	<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Search</h4>
			</div>
			<div class="modal-body"> -->
				<?php  // get_search_form(); ?> 
				
			<!-- </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div> -->
</div><!-- .site-branding -->