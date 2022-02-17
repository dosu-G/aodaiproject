<?php
require_once '../model/product.php';
?>
<?php
	$product = new product();
	$ds=$product-> getAllmaloai();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop Sidebar Grid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap');
	</style>
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop">
					<div class="left-header">
						<!-- Logo desktop -->		
						<div class="logo">
							<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
						</div>	
					</div>
						
					<div class="center-header">
						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li class="active-menu">
									<a href="index.php?act=index">Trang chủ</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.html">Homepage 1</a></li>
										<li><a href="home-02.html">Homepage 2</a></li>
										<li><a href="home-03.html">Homepage 3</a></li>
										<li><a href="home-04.html">Homepage 4</a></li>
										<li><a href="home-05.html">Homepage 5</a></li>
										<li><a href="home-06.html">Homepage 6</a></li>
									</ul> -->
								</li>
<!-- 
								<li>
									<a href="#">Page</a>
									<ul class="sub-menu">
										<li><a href="about-01.html">About 1</a></li>
										<li><a href="about-02.html">About 2</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="error.html">404 Error</a></li>
										<li><a href="checkout.html">CheckOut</a></li>
										<li><a href="account.html">My Account</a></li>
										<li><a href="account-lost-pass.html">My Account Lost Pass</a></li>
										<li><a href="account-register.html">My Account Register</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
									</ul>
								</li> -->

								<li>
									<a href="index.php?act=sanpham">Sản phẩm</a>
									<!-- <ul class="sub-menu">
										<li><a href="shop-sidebar-grid.html">Shop Sidebar Grid</a></li>
										<li><a href="shop-sidebar-list.html">Shop Sidebar List</a></li>
										<li><a href="shop-product-grid.html">Shop Product Grid</a></li>
										<li><a href="shop-product-list.html">Shop Product List</a></li>
										<li><a href="product-single.html">Product Single</a></li>
										<li><a href="shop-cart.html">Shop Cart</a></li>
									</ul> -->
								</li>

								<li>
									<a href="blog-list.html">Blog</a>
									<ul class="sub-menu">
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-grid-01.html">Blog Grid 1</a></li>
										<li><a href="blog-grid-02.html">Blog Grid 2</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul>
								</li>

								<li>
									<a href="gallery-01.html">Gallery</a>
									<ul class="sub-menu">
										<li><a href="gallery-01.html">Gallery 1</a></li>
										<li><a href="gallery-02.html">Gallery 2</a></li>
									</ul>
								</li>

								<li>
									<a href="contact-01.html">Contact</a>
									<ul class="sub-menu">
										<li><a href="contact-01.html">Contact 1</a></li>
										<li><a href="contact-02.html">Contact 2</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
						
					<div class="right-header">
						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
							<div class="h-full flex-m">
								<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
									<img src="images/icons/icon-search.png" alt="SEARCH">
								</div>
							</div>
								
							<div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
								<div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
									<img src="images/icons/icon-cart-2.png" alt="CART">
								</div>

								<div class="cart-header menu-click-child trans-04">
									<div class="bo-b-1 bocl15">
										<div class="size-h-2 js-pscroll m-r--15 p-r-15">
											<!-- cart header item -->
											<div class="flex-w flex-str m-b-25">
												<div class="size-w-15 flex-w flex-t">
													<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
														<img src="images/item-cart-01.jpg" alt="PRODUCT">
													</a>

													<div class="size-w-17 flex-col-l">
														<a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
															Cheery
														</a>

														<span class="txt-s-101 cl9">
															18$
														</span>

														<span class="txt-s-109 cl12">
															x2
														</span>
													</div>
												</div>

												<div class="size-w-14 flex-b">
													<button class="lh-10">
														<img src="images/icons/icon-close.png" alt="CLOSE">
													</button>
												</div>
											</div>

											<!-- cart header item -->
											<div class="flex-w flex-str m-b-25">
												<div class="size-w-15 flex-w flex-t">
													<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
														<img src="images/item-cart-02.jpg" alt="PRODUCT">
													</a>

													<div class="size-w-17 flex-col-l">
														<a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
															Asparagus
														</a>

														<span class="txt-s-101 cl9">
															12$
														</span>

														<span class="txt-s-109 cl12">
															x1
														</span>
													</div>
												</div>

												<div class="size-w-14 flex-b">
													<button class="lh-10">
														<img src="images/icons/icon-close.png" alt="CLOSE">
													</button>
												</div>
											</div>
										</div>
									</div>
										

									<div class="flex-w flex-sb-m p-t-22 p-b-12">
										<span class="txt-m-103 cl3 p-r-20">
											Subtotal
										</span>

										<span class="txt-m-111 cl6">
											48$
										</span>
									</div>

									<div class="flex-w flex-sb-m p-b-31">
										<span class="txt-m-103 cl3 p-r-20">
											Total
										</span>

										<span class="txt-m-111 cl10">
											48$
										</span>
									</div>
									
									<a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
										check out
									</a>	
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
				<div class="h-full flex-m">
					<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
						<img src="images/icons/icon-search.png" alt="SEARCH">
					</div>
				</div>

				<div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
					<div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
						<img src="images/icons/icon-cart-2.png" alt="CART">
					</div>

					<div class="cart-header menu-click-child trans-04">
						<div class="bo-b-1 bocl15">
							<!-- cart header item -->
							<div class="flex-w flex-str m-b-25">
								<div class="size-w-15 flex-w flex-t">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
										<img src="images/item-cart-01.jpg" alt="PRODUCT">
									</a>

									<div class="size-w-17 flex-col-l">
										<a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
											Cheery
										</a>

										<span class="txt-s-101 cl9">
											18$
										</span>

										<span class="txt-s-109 cl12">
											x2
										</span>
									</div>
								</div>

								<div class="size-w-14 flex-b">
									<button class="lh-10">
										<img src="images/icons/icon-close.png" alt="CLOSE">
									</button>
								</div>
							</div>

							<!-- cart header item -->
							<div class="flex-w flex-str m-b-25">
								<div class="size-w-15 flex-w flex-t">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
										<img src="images/item-cart-02.jpg" alt="PRODUCT">
									</a>

									<div class="size-w-17 flex-col-l">
										<a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
											Asparagus
										</a>

										<span class="txt-s-101 cl9">
											12$
										</span>

										<span class="txt-s-109 cl12">
											x1
										</span>
									</div>
								</div>

								<div class="size-w-14 flex-b">
									<button class="lh-10">
										<img src="images/icons/icon-close.png" alt="CLOSE">
									</button>
								</div>
							</div>
						</div>

						<div class="flex-w flex-sb-m p-t-22 p-b-12">
							<span class="txt-m-103 cl3 p-r-20">
								Subtotal
							</span>

							<span class="txt-m-111 cl6">
								48$
							</span>
						</div>

						<div class="flex-w flex-sb-m p-b-31">
							<span class="txt-m-103 cl3 p-r-20">
								Total
							</span>

							<span class="txt-m-111 cl10">
								48$
							</span>
						</div>

						<a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
							check out
						</a>	
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
						<li><a href="home-04.html">Homepage 4</a></li>
						<li><a href="home-05.html">Homepage 5</a></li>
						<li><a href="home-06.html">Homepage 6</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="#">Page</a>
					<ul class="sub-menu-m">
						<li><a href="about-01.html">About 1</a></li>
						<li><a href="about-02.html">About 2</a></li>
						<li><a href="coming-soon.html">Coming Soon</a></li>
						<li><a href="error.html">404 Error</a></li>
						<li><a href="checkout.html">CheckOut</a></li>
						<li><a href="account.html">My Account</a></li>
						<li><a href="account-lost-pass.html">My Account Lost Pass</a></li>
						<li><a href="account-register.html">My Account Register</a></li>
						<li><a href="wishlist.html">Wishlist</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="shop-sidebar-grid.html">Shop</a>
					<ul class="sub-menu-m">
						<li><a href="shop-sidebar-grid.html">Shop Sidebar Grid</a></li>
						<li><a href="shop-sidebar-list.html">Shop Sidebar List</a></li>
						<li><a href="shop-product-grid.html">Shop Product Grid</a></li>
						<li><a href="shop-product-list.html">Shop Product List</a></li>
						<li><a href="product-single.html">Product Single</a></li>
						<li><a href="shop-cart.html">Shop Cart</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="blog-list.html">Blog</a>
					<ul class="sub-menu-m">
						<li><a href="blog-list.html">Blog List</a></li>
						<li><a href="blog-grid-01.html">Blog Grid 1</a></li>
						<li><a href="blog-grid-02.html">Blog Grid 2</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="gallery-01.html">Gallery</a>
					<ul class="sub-menu-m">
						<li><a href="gallery-01.html">Gallery 1</a></li>
						<li><a href="gallery-02.html">Gallery 2</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="contact-01.html">Contact</a>
					<ul class="sub-menu-m">
						<li><a href="contact-01.html">Contact 1</a></li>
						<li><a href="contact-02.html">Contact 2</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<span class="lnr lnr-cross"></span>
			</button>
			
			<div class="container-search-header">
				<form class="wrap-search-header flex-w">
					<button class="flex-c-m trans-04">
						<span class="lnr lnr-magnifier"></span>
					</button>
					<input class="plh1" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
	
	<!-- Title page -->
	<section class="how-overlay2 bg-img1" style="background-image: url(https://theme.hstatic.net/1000136076/1000542013/14/slideshow_2.jpg?v=408);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					shop
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Products
					</span>
				</span>
			</div>
		</div>
	</section>
	
	<!-- Content page -->
	<section class="bg0 p-t-85 p-b-45">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
					<div class="leftbar p-t-15">
						<!--  -->
						<div class="size-a-21 pos-relative">
							<form action="" class="size-a-21 ">
								<input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search" placeholder="Search products...">
								<button class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
									<img class="hov11-child trans-04" src="images/icons/icon-search.png" alt="ICON">
								</button>
							</form>
						</div>

						<!--  -->

							
						<!--  -->
						<div class="p-t-40">
							<h4 class="txt-m-101 cl3 p-b-37">
								Categories
							</h4>
                           
							<ul>
								<?php foreach( $ds as $row) {?>
								<li class="p-b-5">
									<a href="index.php?act=sanphambyid&id=<?=$row['idmaloai']?>" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											<?=$row['tenloai']?>
										</span>
									</a>
								</li>
								<?php }?>
							</ul>
						</div>

					
						<!--  -->
						
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
					<div>
						<div class="flex-w flex-r-m p-b-45 flex-row-rev">
							<div class="flex-w flex-m p-tb-8">
								<div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
								<div class="btn-group" role="group" aria-label="Basic outlined example">
								<button type="button" class="btn btn-outline-primary"><a href="index.php?act=sanpham">SẮP GIÁ</a></button>
								<button type="button" class="btn btn-outline-primary"><a href="index.php?act=sanphamAsc">GIÁ THẤP</a></button>
								<button type="button" class="btn btn-outline-primary"><a href="index.php?act=sanphamDesc">GIÁ CAO</a></button>
								</div>
								</div>
							</div>

			
						</div>
						
						<!-- Shop grid -->
						<div class="shop-grid">
							<div class="row">
							   <?php foreach($proDesc as $row){?>
								<div class="col-sm-6 col-lg-4 p-b-30">
									<!-- Block1 -->
									<div class="block1">
										<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
											<img src="../controller/images/file/<?=$row['hinhanh1']?>" alt="IMG">

											<div class="block1-content flex-col-c-m p-b-46">
												<a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
													<span style="font-style:font-family: 'Poppins', sans-serif;color:white"><?=$row['tensanpham']?></span>
												</a>

												<span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04" style="color:white">
													<?=number_format($row['giasanpham'])?>
												</span>

												<div class="block1-wrap-icon flex-c-m flex-w trans-05">
													<a href="index.php?act=chitietsanpham&id=<?=$row['idsanpham']?>" class="block1-icon flex-c-m wrap-pic-max-w">
														<img src="images/icons/icon-view.png" alt="ICON">
													</a>

													<a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
														<img src="images/icons/icon-cart.png" alt="ICON">
													</a>

													<a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
														<img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
														<img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
                               <?php }?>
								<!-- - -->
							</div>
						</div>

						<!-- Shop list -->
						<div class="shop-list dis-none">
							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-37.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Strawberry
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											21$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-38.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Red pumpkin
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											15$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-39.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Cauliflower
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											19$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-40.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Vegetable
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											23$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-41.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Bell pepper
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											12$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-42.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Beetroot
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											9$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-43.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Cabbage
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											15$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-44.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Tomato
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											38$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-45.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Onion
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											9$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>

							<div class="row p-b-30">
								<div class=" col-sm-5 col-lg-4">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
										<img src="images/product-46.jpg" alt="PRODUCT">
									</a>
								</div>

								<div class=" col-sm-7 col-lg-8">
									<div class="p-t-5 p-b-20">
										<div class="flex-w flex-sb-m">
											<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
												Eggplant
											</a>

											<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
												<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
												<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
											</a>
										</div>

										<span class="txt-m-117 cl9">
											18$
										</span>

										<p class="txt-s-101 cl6 p-t-18">
											These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing .
										</p>

										<div class="flex-w p-t-29">
											<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
												Add to cart
											</button>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<!-- Pagination -->
						<div class="flex-w flex-c-m p-t-47">
							<a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
								1
							</a>

							<a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
								2
							</a>

							<a href="#" class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
								Next
								<span class="lnr lnr-chevron-right m-t-3 m-l-7"></span>
								<span class="lnr lnr-chevron-right m-t-3"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!-- Logo -->
	<div class="sec-logo bg0">
		<div class="container">
			<div class="flex-w flex-sa-m bo-t-1 bocl13 p-tb-60">
				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-07.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-08.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-09.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-10.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-11.png" alt="IMG">
				</a>
			</div>
		</div>
	</div>

	<!-- Subscribe -->
	<section class="sec-subscribe bg13 p-t-65 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-tb-15">
					<div class="h-full flex-col-m">
						<h4 class="txt-m-110 cl3 p-b-4">
							Subscribe Newsletter.
						</h4>

						<p class="txt-s-101 cl6">
							Get e-mail updates about our latest shop and special offers.
						</p>
					</div>
				</div>

				<div class="col-md-7 p-tb-15">
					<form class="flex-w flex-m h-full">
						<input class="size-a-6 txt-s-106 cl6 plh0 p-rl-30 w-full-sm" type="text" name="email" placeholder="Your email address">
						<button class="bg10 size-a-5 txt-s-107 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg12">
		<div class="container">
			<div class="wrap-footer flex-w p-t-60 p-b-62">
				<div class="footer-col1">
					<div class="footer-col-title">
						<a href="#">
							<img src="images/icons/logo-01.png" alt="LOGO">
						</a>
					</div>

					<p class="txt-s-101 cl6 size-w-10 p-b-16">
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
					</p>

					<ul>
						<li class="txt-s-101 cl6 flex-t p-b-10">
							<span class="size-w-11">
								<img src="images/icons/icon-mail.png" alt="ICON-MAIL">
							</span>
							
							<span class="size-w-12 p-t-1">
								markrussell@example.com
							</span>
						</li>

						<li class="txt-s-101 cl6 flex-t p-b-10">
							<span class="size-w-11">
								<img src="images/icons/icon-pin.png" alt="ICON-MAIL">
							</span>
							
							<span class="size-w-12 p-t-1">
								No 40 Baria Sreet 133/2, NewYork
							</span>
						</li>

						<li class="txt-s-101 cl6 flex-t p-b-10">
							<span class="size-w-11">
								<img src="images/icons/icon-phone.png" alt="ICON-MAIL">
							</span>
							
							<span class="size-w-12 p-t-1">
								(785) 977 5767
							</span>
						</li>
					</ul>
				</div>

				<div class="footer-col2">
					<div class="footer-col-title flex-m">
						<span class="txt-m-109 cl3">
							Information
						</span>
					</div>

					<ul>
						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								About our shop
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								Top sellers
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								Our blog
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								New products
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								Secure shopping
							</a>
						</li>
					</ul>
				</div>

				<div class="footer-col3">
					<div class="footer-col-title flex-m">
						<span class="txt-m-109 cl3">
							My Account
						</span>
					</div>

					<ul>
						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								My account
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								Discount
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								Personal information
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								My address
							</a>
						</li>

						<li class="p-b-16">
							<a href="#" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
								Order history
							</a>
						</li>
					</ul>
				</div>

				<div class="footer-col4">
					<div class="footer-col-title flex-m">
						<span class="txt-m-109 cl3">
							Instagram
						</span>
					</div>

					<div class="flex-w flex-sb p-t-6">
						<div class="size-w-13 m-b-10">
							<a href="#" class="dis-block size-a-7 bg-img1 hov4"
							style="background-image: url('images/instagram-01.jpg');"></a>
						</div>
						
						<div class="size-w-13 m-b-10">
							<a href="#" class="dis-block size-a-7 bg-img1 hov4"
							style="background-image: url('images/instagram-02.jpg');"></a>
						</div>

						<div class="size-w-13 m-b-10">
							<a href="#" class="dis-block size-a-7 bg-img1 hov4"
							style="background-image: url('images/instagram-03.jpg');"></a>
						</div>

						<div class="size-w-13 m-b-10">
							<a href="#" class="dis-block size-a-7 bg-img1 hov4"
							style="background-image: url('images/instagram-04.jpg');"></a>
						</div>

						<div class="size-w-13 m-b-10">
							<a href="#" class="dis-block size-a-7 bg-img1 hov4"
							style="background-image: url('images/instagram-05.jpg');"></a>
						</div>

						<div class="size-w-13 m-b-10">
							<a href="#" class="dis-block size-a-7 bg-img1 hov4"
							style="background-image: url('images/instagram-06.jpg');"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="flex-w flex-sb-m bo-t-1 bocl14 p-tb-14">
				<span class="txt-s-101 cl9 p-tb-10 p-r-29">
					Copyright © 2017 Organive. All rights reserved.
				</span>

				<div class="flex-w flex-m">
					<a href="#" class="m-r-29 m-tb-10">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-r-29 m-tb-10">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-r-29 m-tb-10">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-r-29 m-tb-10">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>
			</div>
		</div>
	</footer>
	

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="lnr lnr-chevron-up"></span>
		</span>
	</div>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>