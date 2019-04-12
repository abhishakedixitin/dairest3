<?php
session_start();
?>


<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place Dairest icon in the url location -->
        <link rel="icon" href="img/logo/logo1.png" />

		    <!-- google-font -->
		    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		    <!-- all css here -->
		    <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		    <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		    <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		    <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		    <!-- nivo-slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		    <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		    <!--linearicons css -->
        <link rel="stylesheet" href="css/linearicons-icon-font.min.css">
		    <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		    <!-- style css -->
		    <link rel="stylesheet" href="css/style.css">
		    <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        
       
    </head>

    <body>
		<header>
           
			<div class="header-top-area ptb-10 hidden-xs header-top-area-4">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-5">
							<div class="header-top-right header-top-left-4">
								<p>FREE SHIPPING ON ORDERS OVER $49</p>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                                 <li><a href="cart.php">My Orders</a></li>
                    <li class="click_menu"><a href="#"> <?php echo $_SESSION['username'] ?><i class="fa fa-angle-down"></i></a>
										  <ul class="click_menu_show">
											  <li><a href="sign-in.php">My Account</a></li>
											  <li><a href="wishlist.php">My Wish List</a></li>
											  <li><a href="sign-in.php">Compare Products</a></li>
                                              <li><a href="logout.php">Log Out</a></li>
										  </ul>
									</li>
                                   
									
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="header-bottom-area home-page-2 ptb-10" style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="menu-search-box scnd-fix">
								<form action="#">
									<input type="text" placeholder="Search here..."/>
									<button><span class="lnr lnr-magnifier"></span></button>
								</form>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
							<div class="header-bottom-right-4-inner">
								<a href="#" style="color:#ffffff"><span class="lnr lnr-heart"></span></a>
							</div>
							<div class="header-bottom-right header-bottom-right-4">
								<div class="shop-cart shop-cart-4">
									<a href="#" style="color:#ffffff"><span class="lnr lnr-cart"></span></a>
								</div>
								<div class="shop-cart-hover shop-cart-hover-4 fix">
									<ul>
										<li>
											<div class="cart-img">
												<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
											</div>
											<div class="cart-content">
												<h4><a href="#">1 x Classic French Macarons...</a></h4>
												<span><a href="#">18 pieces</a></span>
												<span class="cart-price">$ 34.99</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>

										<li>
											<div class="cart-img">
												<a href="#"><img src="img/cart/2.jpg" alt="" /></a>
											</div>
											<div class="cart-content">
												<h4><a href="#">1 x MoonCake Mid-Autumn Festival...</a></h4>
												<span><a href="#">16 pieces</a></span>
												<span class="cart-price">$ 28.59</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>

										<li class="total-price"><span> Total $ 63.58 </span></li>
										<li class="checkout-bg">
											<a href="checkout.php">checkout <i class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

		<!-- mainmenu-area-start -->
		<div class="mainmenu-area home-page-2 mainmenu-area-4" id="main_h">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mainmenu hidden-xs">
							<nav>
								<ul>
                                    <li><a href="index.php">Home</a></li>
                  <li><a href="#">Navigation</a>
                    <ul>
                      <li><a href="wishlist.php">my wishlist</a></li>
                      <li><a href="cart.php">cart page</a></li>
                      <li><a href="checkout.php">checkout</a></li>
                      <li><a href="product-details.php">product-details</a></li>
                      <li><a href="user_accountpage.php">User account</a></li>
                      
                      <li><a href="shop.php">shop </a></li>
                      <li><a href="contact.php">contact us</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href=#>New Arrivals</a></li>
                      <li><a href=#>Famous Brands</a></li>
                      <li><a href=#>Local Popular</a></li>
                      <li><a href=#>Snickers</a></li>
                      <li><a href=#>Creations</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Gifts</a>
                    <ul>
                      <li><a href=#>Birthday Gifts</a></li>
                      <li><a href=#>Anniversary</a></li>
                      <li><a href=#>Baby Showers</a></li>
                      <li><a href=#>Business Gifts</a></li>
                      <li><a href=#>Treat Yourself</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Chocolate</a>
                    <ul>
                      <li><a href=#>Dark Chocolate</a></li>
                      <li><a href=#>Milk Chocolate</a></li>
                      <li><a href=#>White Chocolate</a></li>
                      <li><a href=#>Kosher Chocolate</a></li>
                      <li><a href=#>Associated Chocolate</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Sprinkles</a>
                    <ul>
                      <li><a href=#>Mixes</a></li>
                      <li><a href=#>Candy</a></li>
                      <li><a href=#>Kits</a></li>
                      <li><a href=#>Quins</a></li>
                      <li><a href=#>Vegan</a></li>
                    </ul>
                  </li>

									<li><a href="contact.php">contact</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="mobile-menu">
								<ul>
                  <li><a href="#">Navigation</a>
                    <ul>
                      <li><a href="wishlist.php">my wishlist</a></li>
                      <li><a href="cart.php">cart page</a></li>
                      <li><a href="checkout.php">checkout</a></li>
                      <li><a href="product-details.php">product-details</a></li>
                      <li><a href="user_accountpage.php">User account</a></li>
                      <li><a href="sign-in.php">login</a></li>
                                            <li><a href="sign-up.php">Register</a></li>
                      <li><a href="shop.php">shop </a></li>
                      <li><a href="contact.php">contact us</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Shop</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mainmenu-area-end -->

		<!-- slider-area-start -->  <!-- slider-area-end -->

		<!-- service-area-start -->   <!-- service-area-end -->

    <!--new-product-area-start -->
		<div class="new-product-area hot-deal-area dotted-5 new-product-4 pt-80">
			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12">
						<div class="section-title section-title-4">
							<h2>New Products</h2>
						</div>

						<div class="row">
							<div class="new-product-home-4-active">

								<div class="col-lg-12">
									<div class="single-new-product">

										<div class="product-img">
											<a href="product-details.php">
												<img src="img/product/1.jpg" class="first_img" alt="" style="width:400px;height:300px" />
											</a>
										</div>

										<div class="product-content text-center">
											<a href="product-details.php"><h3>Classic French Macarons</h3></a>
											<div class="product-price-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>

											<div class="price">
												<h4>$ 34.99</h4>
												<h3 class="del-price"><del>$ 45</del></h3>
											</div>
										</div>

										<div class="product-icon-wrapper">
											<div class="product-icon">
												<ul>
													<li><a href="#"><span class="lnr lnr-sync"></span></a></li>
													<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
													<li><a href="#"><span class="lnr lnr-cart"></span></a></li>
												</ul>
											</div>
										</div>

									</div>
								</div>

								<div class="col-lg-12">
									<div class="single-new-product">

										<div class="product-img">
											<a href="product-details.php">
												<img src="img/product/2.jpg" class="first_img" alt=""style="width:400px;height:300px" />

											</a>
										</div>

										<div class="product-content text-center">
											<a href="product-details.php"><h3>Mooncake Mid-Autumn Festival</h3></a>
											<div class="product-price-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<h4>$ 28.59</h4>
										</div>

										<div class="product-icon-wrapper">
											<div class="product-icon">
												<ul>
													<li><a href="#"><span class="lnr lnr-sync"></span></a></li>
													<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
													<li><a href="#"><span class="lnr lnr-cart"></span></a></li>
												</ul>
											</div>
										</div>

									</div>
								</div>

								<div class="col-lg-12">
									<div class="single-new-product">
										<div class="product-img">
											<a href="product-details.php">
												<img src="img/product/3.jpg" class="first_img" alt="" style="width:400px;height:300px"/>
											</a>
										</div>
										<div class="product-content text-center">
											<a href="product-details.php"><h3>Janpanese Mochi Cream</h3></a>
											<div class="product-price-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<h4>$ 28.99</h4>
										</div>

										<div class="product-icon-wrapper">
											<div class="product-icon">
												<ul>
													<li><a href="#"><span class="lnr lnr-sync"></span></a></li>
													<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
													<li><a href="#"><span class="lnr lnr-cart"></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="single-new-product">
										<div class="product-img">
											<a href="product-details.php">
												<img src="img/product/4.jpg" class="first_img" alt="" style="width:400px;height:300px"/>
											</a>
										</div>

										<div class="product-content text-center">
											<a href="product-details.php"><h3>Hershey's Special Dark Chocolate Miniatures Bars 3lb bag</h3></a>
											<div class="product-price-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
                      <div class="price">
												<h4>$ 30</h4>
												<h3 class="del-price"><del>$ 35.94</del></h3>
											</div>
										</div>

										<div class="product-icon-wrapper">
											<div class="product-icon">
												<ul>
													<li><a href="#"><span class="lnr lnr-sync"></span></a></li>
													<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
													<li><a href="#"><span class="lnr lnr-cart"></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="single-new-product">
										<div class="product-img">
											<a href="product-details.php">
												<img src="img/product/5.jpg" class="first_img" alt="" style="width:400px;height:300px"/>
											</a>
										</div>
										<div class="product-content text-center">
											<a href="product-details.php"><h3>Lollipop Marshmallow</h3></a>
											<div class="product-price-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price">
												<h4>$ 15.99</h4>
												<h3 class="del-price"><del>$ 9.99</del></h3>
											</div>
										</div>
										<div class="product-icon-wrapper">
											<div class="product-icon">
												<ul>
													<li><a href="#"><span class="lnr lnr-sync"></span></a></li>
													<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
													<li><a href="#"><span class="lnr lnr-cart"></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						
					</div>
				</div>

			</div>
		</div>
		<!--new-product-area-end -->

		<!-- contact-area-start -->
		<div class="contact-area ptb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar_b-30">
						<div class="contuct-info text-center">
							<h4>Sign up for news & offers!</h4>
							<p>You may safely unsubscribe at any time</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-1 col-xs-12">
						<div class="search-box">
							<form action="#">
								<input type="email" placeholder="Enter your email address"/>
								<button><span class="lnr lnr-envelope"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-area-end -->

		<!-- footer-area-start -->
		<div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:47%"  >
			<div class="container" >
				<div class="row" >
					<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-logo">
								<a href="#"><img src="img/logo/logo2.png" width="200px" height="50px" alt="" /></a>
							</div>
							<p style="color:#ffffff">We devote to provide you the best shopping experience with sweets and treats.</p>
							

						</div>
					</div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

					<div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-title">
								<a href="#"><h3 	style="color:rgba(240,128,128,0.99)">useful links</h3></a>
							</div>
							<div class="footer-wrapper">
								<ul class="usefull-link" >
									<li ><a href="#" style="color:#ffffff">Contact us</a></li>
									<li><a href="#" style="color:#ffffff">Site map</a></li>
									<li><a href="#" style="color:#ffffff">About us</a></li>
									<li><a href="#" style="color:#ffffff">Specials</a></li>
									<li><a href="#" style="color:#ffffff">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>



		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- scrolly js -->
        <script src="js/jquery.scrolly.js"></script>
		<!-- magnific-popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
		<!--  countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- nivo.slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
          <script type="text/javascript">

if (screen.width <= 699) {
location.assign("mobile-user.php")
}
   
</script> 
        
    </body>
</html>
