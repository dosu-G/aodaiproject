
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home 01</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/settings.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header-v1">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop">
					<div class="left-header">
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
										<?php 
										 foreach($ds as $row){
										?>
										<li><a href="index.php?act=sanphambyid&id=<?=$row['idmaloai']?>"><?=$row['tenloai']?></a></li>
										<!-- <li><a href="about-02.html">Áo dài dáng xưa</a></li>
										<li><a href="coming-soon.html">Áo dài thiêu tay</a></li>
										<li><a href="error.html">Áo dài cách tân</a></li> -->
										<?php }?>
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
									<!-- <ul class="sub-menu">
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-grid-01.html">Blog Grid 1</a></li>
										<li><a href="blog-grid-02.html">Blog Grid 2</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul> -->
								</li>
								<li>
									<a href="index.php?act=cart">GIỎ HÀNG</a>
								</li>
								<?php 
								if(!isset($_SESSION['id']) ){ ?>
								<li>
									<a href="index.php?act=login">ĐĂNG NHẬP</a>
								</li>
							<?php	}else{ ?>
								<li>
									<a href="index.php?act=logout">ĐĂNG Xuất</a>
								</li>
							<?php } ?>
                               <?php if(isset($_SESSION['id']) && $info_user['sort'] == 1){ ?>

								<li>
									<a href="../../ASM2/controller">ADMIN</a>
								</li>

							 <?php  } ?>
							</ul>
						</div>	
					</div>
						
					<div class="center-header">
						<!-- Logo desktop -->		
						<div class="logo">
						<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
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
	
	<!-- Slider -->
	<section class="sec-slider">
		<div class="rev_slider_wrapper fullwidthbanner-container">
			<div id="rev_slider_1" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
				<ul>
					<!-- Slide 1 -->
					<li data-transition="fade">
						<!--  -->
						<img src="https://theme.hstatic.net/1000136076/1000542013/14/slideshow_1.jpg?v=409" alt="IMG-BG" class="rev-slidebg">
						
					
					   
						    <a href="shop-sidebar-grid.html" class="btn-slide flex-c-m">
						    	Shop now
						    	<span class="lnr lnr-chevron-right m-l-7"></span>
						    	<span class="lnr lnr-chevron-right"></span>
						    </a>
						</div>
					</li>

						
						<!--  -->
						<h2 class="tp-caption tp-resizeme layer2" >
					    	<span>SUMIRE</span>
					    </h2>

					</li>
						    <a href="shop-sidebar-grid.html" class="btn-slide flex-c-m">
						    	Shop now
						    	<span class="lnr lnr-chevron-right m-l-7"></span>
						    	<span class="lnr lnr-chevron-right"></span>
						    </a>
						</div>
					</li>
				</ul>				
			</div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="sec-welcome bg0 p-t-145 p-b-95">
		<div class="container">
			<div class="size-a-1 flex-col-c-m p-b-90">
				<div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
					Green Agriculture

					<div class="how-pos1">
						<img src="images/icons/symbol-02.png" alt="IMG">
					</div>
				</div>

				<h3 class="txt-center txt-l-101 cl3 respon1">
					welcome to organive
				</h3>
			</div>

			<div class="wrap-pic-max-w flex-c-t flex-w p-t-255 item-welcome-parent">
				<img class="size-w-1" src="https://theme.hstatic.net/1000136076/1000542013/14/xxx_4.jpg?v=408" alt="IMG" width="80%" height="700px" object-fit="cover">

				<!-- item welcome -->
				<div class="item-welcome one">
					<div class="item-welcome-pic pos-relative">
						<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
							<img src="images/icons/icon1.png" alt="IMG">
						</div>

						<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
							<img src="images/icons/icon1.1.png" alt="IMG">
						</div>
					</div>

					<div class="item-welcome-txt p-t-27">
						<h4 class="txt-m-101 cl3 txt-center p-b-11">
							100% Organic
						</h4>

						<p class="txt-s-101 cl6 txt-center">
							Lorem Ipsum is simply dummy text of the printing and typesetting .
						</p>
					</div>
				</div>

				<!-- item welcome -->
				<div class="item-welcome two">
					<div class="item-welcome-pic pos-relative">
						<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
							<img src="images/icons/icon2.png" alt="IMG">
						</div>

						<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
							<img src="images/icons/icon2.2.png" alt="IMG">
						</div>
					</div>

					<div class="item-welcome-txt p-t-27">
						<h4 class="txt-m-101 cl3 txt-center p-b-11">
							family healthy
						</h4>

						<p class="txt-s-101 cl6 txt-center">
							Lorem Ipsum is simply dummy text of the printing and typesetting .
						</p>
					</div>
				</div>

				<!-- item welcome -->
				<div class="item-welcome three">
					<div class="item-welcome-pic pos-relative">
						<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
							<img src="images/icons/icon3.png" alt="IMG">
						</div>

						<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
							<img src="images/icons/icon3.3.png" alt="IMG">
						</div>
					</div>

					<div class="item-welcome-txt p-t-27">
						<h4 class="txt-m-101 cl3 txt-center p-b-11">
							Always Fresh
						</h4>

						<p class="txt-s-101 cl6 txt-center">
							Lorem Ipsum is simply dummy text of the printing and typesetting .
						</p>
					</div>
				</div>

				<!-- item welcome -->
				<div class="item-welcome four">
					<div class="item-welcome-pic pos-relative">
						<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
							<img src="images/icons/icon4.png" alt="IMG">
						</div>

						<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
							<img src="images/icons/icon4.4.png" alt="IMG">
						</div>
					</div>

					<div class="item-welcome-txt p-t-27">
						<h4 class="txt-m-101 cl3 txt-center p-b-11">
							Food safety
						</h4>

						<p class="txt-s-101 cl6 txt-center">
							Lorem Ipsum is simply dummy text of the printing and typesetting .
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Item -->
	

	<!-- Deal -->
	<section class="sec-deal bg-img1" style="background-image: url('images/bg-01.jpg');">
		<div class="flex-w flex-m how-pos2-parent">
			

			<div class="size-w-3 txt-center wrap-pic-max-s w-full-lg">
				<img src="https://theme.hstatic.net/1000136076/1000542013/14/xxx_6.jpg?v=409" alt="IMG">
			</div>

			<div class="size-w-4 p-t-105 p-b-90 p-r-15 respon3">
				<div class="size-a-1 flex-col-l-m p-b-35">
					<div class="txt-m-201 cl10 how-pos1-parent m-b-14">
						Best Price For You

						
					</div>

					<h3 class="txt-l-101 cl3 respon1">
						deal of the day
					</h3>
				</div>

				<div class="p-b-32">
					<a href="#" class="txt-m-105 cl6 hov-cl10 trans-04">
						Roasted corn
					</a>

					<div class="txt-m-105 p-t-15 p-b-22">
						<span class="cl9">
							20$
						</span>

						<span class="cl10">
							Now Only 15$
						</span>
					</div>

					<p class="txt-s-102 cl9">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
					</p>
				</div>

				<div class="flex-w coutdown100 p-b-22" data-year="0" data-month="0" data-date="10" data-hours="23" data-minutes="0" data-seconds="0" data-timezone="auto">
					<div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 days">
							10
						</span>

						<span class="txt-m-106 cl9">
							days
						</span>
					</div>

					<div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 hours">
							25
						</span>

						<span class="txt-m-106 cl9">
							hours
						</span>
					</div>

					<div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 minutes">
							56
						</span>

						<span class="txt-m-106 cl9">
							mins
						</span>
					</div>

					<div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 seconds">
							42
						</span>

						<span class="txt-m-106 cl9">
							secs
						</span>
					</div>
				</div>
				
				<div class="flex-w">
					<a href="shop-sidebar-grid.html" class="flex-c-m txt-s-103 cl6 size-a-2 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04">
						Shop now
						<span class="lnr lnr-chevron-right m-l-7"></span>
						<span class="lnr lnr-chevron-right"></span>
					</a>
				</div>
					
			</div>
		</div>
	</section>

	<!-- Product2 -->
	

	<!-- Testimonials -->
	<div class="sec-testimonials bg12 p-t-120 p-b-80 how-pos3-parent how-pos4-parent">

	
	</div>

	<!-- Blog -->
	<section class="sec-blog bg0 p-t-145 p-b-45">
		<div class="container">
			<div class="size-a-1 flex-col-c-m p-b-70">
				<div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
					Keep Updated With Us

					<div class="how-pos1">
						<img src="images/icons/symbol-02.png" alt="IMG">
					</div>
				</div>

				<h3 class="txt-center txt-l-101 cl3 respon1">
					From our blog
				</h3>
			</div>

			<div class="row">
				<div class="col-md-6 p-b-50">
					<div class="p-r-15 p-r-0-lg">
						<a href="blog-single.html" class="wrap-pic-w hov4">
							<img src="https://theme.hstatic.net/1000136076/1000542013/14/xxx_7.jpg?v=409" alt="BLOG">
						</a>

						<div class="flex-w p-t-30">
							<div class="size-a-4 bg10 flex-col-c-m m-r-34">
								<span class="txt-l-106 cl0 p-b-4">
									18
								</span>

								<span class="txt-m-108 cl0 p-b-5">
									June
								</span>
							</div>

							<div class="size-w-9">
								<h4 class="p-b-13">
									<a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
										There are many variations of passages of Lorem Ipsum available
									</a>
								</h4>

								<p class="txt-s-101 cl6 p-b-21">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod titncidunt ut laoreet dolore magna aliquam erat volutpat. Ut ...
								</p>

								<div class="how-line2 p-l-40">
									<a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
										Read more
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 p-b-50">
					<div class="p-l-15 p-l-0-lg">
						<a href="blog-single.html" class="wrap-pic-w hov4">
							<img src="https://theme.hstatic.net/1000136076/1000542013/14/xxx_5.jpg?v=409" alt="BLOG">
						</a>

						<div class="flex-w p-t-30">
							<div class="size-a-4 bg10 flex-col-c-m m-r-34">
								<span class="txt-l-106 cl0 p-b-4">
									20
								</span>

								<span class="txt-m-108 cl0 p-b-5">
									October
								</span>
							</div>

							<div class="size-w-9">
								<h4 class="p-b-13">
									<a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
										There are many variations of passages of Lorem Ipsum available
									</a>
								</h4>

								<p class="txt-s-101 cl6 p-b-21">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod titncidunt ut laoreet dolore magna aliquam erat volutpat. Ut ...
								</p>

								<div class="how-line2 p-l-40">
									<a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
										Read more
									</a>
								</div>
							</div>
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
	<script src="vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="js/revo-custom.js"></script>
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
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/jquery.countdown.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>