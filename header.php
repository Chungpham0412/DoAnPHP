<?php include "config/connect.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flatize - Shop HTML5 Responsive Template</title>
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Icon Fonts -->
	<link href="public/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Owl Carousel Assets -->
	<link href="public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="public/vendor/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="public/vendor/owl-carousel/owl.transitions.css" rel="stylesheet">
	
	<!-- bxslider -->
	<link href="public/vendor/bxslider/jquery.bxslider.css" rel="stylesheet">
	<!-- flexslider -->
	<link rel="stylesheet" href="public/vendor/flexslider/flexslider.css" media="screen">

	<!-- Theme -->
	<link href="public/css/theme-animate.css" rel="stylesheet">
	<link href="public/css/theme-elements.css" rel="stylesheet">
	<link href="public/css/theme-blog.css" rel="stylesheet">
	<link href="public/css/theme-shop.css" rel="stylesheet">
	<link href="public/css/theme.css" rel="stylesheet">
	
	<!-- Style Switcher-->
	<link rel="stylesheet" href="public/style-switcher/css/style-switcher.css">
	<link href="public/css/colors/cyan/style.html" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="public/css/theme-responsive.css" rel="stylesheet">

	<!-- login -->
	<link rel="stylesheet" type="images/png" href="public/login/images/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="public/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="public/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="public/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="public/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="public/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/login/css/main.css">
</head>
<body>
		<header>
			
			<nav class="navbar navbar-default navbar-main navbar-main-slide" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a class="logo" href="index.php"><img src="public/images/logo.png" alt="Flatize"></a> </div>
					<ul class="nav navbar-nav navbar-act pull-right">
						<!-- login -->
						<li class="login dropdown" ><a href=""  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
							<ul class="dropdown-menu">
								<li><a href="registration.php">Đăng kí</a></li>
								<li><a href="login.php">Đăng nhập</a></li>
							</ul>
						</li>
						<!-- Tìm kiếm -->
						<li class="search"><a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search"></i></a></li>
					</ul>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">
							<!-- <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a></li> -->

							<li class="dropdown"><a href="product.php" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="product_man.php">Thời trang nam</a>
										<ul class="dropdown-menu">
											<li><a href="shop-full-width.html">Shop - Full Width</a></li>
											<li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
											<li><a href="shop-list-sidebar.html">Shop List - Sidebar</a></li>
											<li><a href="shop-product-detail1.html">Shop - Product Detail 1</a></li>
											<li><a href="shop-product-detail2.html">Shop - Product Detail 2</a></li>
											<li><a href="shop-cart-full.html">Shop - Cart Full</a></li>
											<li><a href="shop-cart-sidebar.html">Shop - Cart Sidebar</a></li>
											<li><a href="shop-checkout.html">Shop - Checkout</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a href="product_woman.php">Thời trang nữ</a>
										<ul class="dropdown-menu">
											<li><a href="shop-full-width.html">Shop - Full Width</a></li>
											<li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
											<li><a href="shop-list-sidebar.html">Shop List - Sidebar</a></li>
											<li><a href="shop-product-detail1.html">Shop - Product Detail 1</a></li>
											<li><a href="shop-product-detail2.html">Shop - Product Detail 2</a></li>
											<li><a href="shop-cart-full.html">Shop - Cart Full</a></li>
											<li><a href="shop-cart-sidebar.html">Shop - Cart Sidebar</a></li>
											<li><a href="shop-checkout.html">Shop - Checkout</a></li>
										</ul>
									</li>							
								</ul>
							</li>
							<li><a href="product.php">Blog</a></li>
							<li><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
						</ul>
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>
