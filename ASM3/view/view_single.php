<?php
    session_start();
	require_once '../model/product.php';
	$product = new  product();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product single</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/slide100/slide100.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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

								<li>
									<a href="#">Áo dài</a>
									<ul class="sub-menu">
										<li><a href="about-01.html">Áo dài truyền thống</a></li>
										<li><a href="about-02.html">Áo dài dáng xưa</a></li>
										<li><a href="coming-soon.html">Áo dài thiêu tay</a></li>
										<li><a href="error.html">Áo dài cách tân</a></li>
									</ul>
								</li>

								<li>
									<a href="index.php?act=sanpham">Sản phẩm</a>
									<!-- <ul class="sub-menu">
										<li><a href="shop-sidebar-grid.html">A</a></li>
										<li><a href="shop-sidebar-list.html">Shop Sidebar List</a></li>
										<li><a href="shop-product-grid.html">Shop Product Grid</a></li>
										<li><a href="shop-product-list.html">Shop Product List</a></li>
										<li><a href="product-single.html">Product Single</a></li>
										<li><a href="shop-cart.html">Shop Cart</a></li>
									</ul> -->
								</li>

								<li>
									<a href="blog-list.html">QUẦN PHỤ & KIỆN</a>
									<ul class="sub-menu">
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-grid-01.html">Blog Grid 1</a></li>
										<li><a href="blog-grid-02.html">Blog Grid 2</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul>
								</li>
                                <li>
									<a href="../../ASM2/controller">ADMIN</a>
								</li>
							</ul>
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
	<section class="how-overlay2 bg-img1" style="background-image: url(https://theme.hstatic.net/1000136076/1000542013/14/slideshow_2.jpg?v=409);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					shop
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.php?act=index" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<a href="index.php?act=sanpham" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						/ Products
					</a>
				</span>
			</div>
		</div>
	</section>
	<!-- Product detail -->
	<?php foreach($pro_detail as $row){?>
	<section class="sec-product-detail bg0 p-t-105 p-b-70">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-6">
					<div class="m-r--30 m-r-0-lg">
						<!-- Slide 100 -->
						<div id="slide100-01">
							<div class="wrap-main-pic-100 bo-all-1 bocl12 pos-relative">
								<div class="main-frame">
									<div class="wrap-main-pic">
										<div class="main-pic">
											<img src="../controller/images/file/<?=$row['hinhanh1']?>" alt="IMG-SLIDE">
										</div>
									</div>
								</div>

								<!-- <div class="wrap-arrow-slide-100 s-full ab-t-l trans-04">
									<span class="my-arrow back prev-slide-100"><i class="fa fa-angle-left m-r-1" aria-hidden="true"></i></span>
									<span class="my-arrow next next-slide-100"><i class="fa fa-angle-right m-l-1" aria-hidden="true"></i></span>
								</div> -->
							</div>

						
						</div>
					</div>
				</div>

				<div class="col-md-5 col-lg-6">
					<div class="p-l-70 p-t-35 p-l-0-lg">
						<h4 class="js-name1 txt-l-104 cl3 p-b-16">
							<?=$row['tensanpham']?>
						</h4>

						<span class="txt-m-117 cl9">
							<?=number_format($row['giasanpham'])?>
						</span>
						
						<div class="flex-w flex-m p-t-30 p-b-27">
							<span class="fs-16 cl11 lh-15 txt-center m-r-15">
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
                            </span>
						</div>
						
						<p class="txt-s-101 cl6">
	                       <?=$row['mota']?>					
						</p>

						<div class="flex-w flex-m p-t-55 p-b-30">
							<div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
								<div class="btn-num-product-down flex-c-m fs-29"></div>

								<input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product" value="1">

								<div class="btn-num-product-up flex-c-m fs-16"></div>
							</div>

							<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
								Add to cart
							</button>
						</div>

						<!-- <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Sku:
							</span>

							<span class="cl9">
								156
							</span>
						</div>

						<div class="txt-s-107 p-b-6">
							<span class="cl6">
								Loại sản phẩm:
							</span>

							<span class="cl9">
								Fruit
							</span>
						</div>

						<div class="txt-s-107 p-b-6">
							<span class="cl6">
								Tags:
							</span>

							<a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
								Healthy,
							</a>

							<a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
								Organic
							</a>
						</div> -->
					</div>
				</div>
			</div>
            <?php } ?>
			<!-- Tab01 -->
			<div class="tab02 p-t-80">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
	</li>
				</ul>

				<!-- Tab panes -->
		
			</div>
		</div>
	</section>
	
	<!-- Related product -->
	<section class="sec-related bg0 p-b-85">
		<div class="container">
			<!-- slide9 -->
			<div class="wrap-slick9">
				<div class="flex-w flex-sb-m p-b-33 p-rl-15">
					<h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
						SẢN PHẨM LIÊN QUAN
					</h3>


				</div>

				<div class="slick9">

					<!-- - -->
                    <?php
					   $listproduct = $product->listproductrelase();

					   foreach ($listproduct  as $row ) {
						
					?>
					<!-- - -->
					<div class="item-slick9 p-all-15">
						<!-- Block1 -->
						<div class="block1">
							<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
								<img src="../controller/images/file/<?=$row['hinhanh1']?>" alt="IMG">

								<div class="block1-content flex-col-c-m p-b-46">
									<a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
										<span style="color:white"><?=$row['tensanpham']?></span>
									</a>

									<span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
									<span style="color:white"><?=$row['giasanpham']?></span>
									</span>

									<div class="block1-wrap-icon flex-c-m flex-w trans-05">
										<a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
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
                    <?php } ?>
					<!-- - -->
				
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
	<script src="vendor/slide100/slide100.js"></script>
	<script src="js/slide100-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>