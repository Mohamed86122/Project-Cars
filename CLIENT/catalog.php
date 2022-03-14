<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="css/all.min.css">
	<!-- bootstrap -->
	
	<style>   
         <?php 
               include('css/all.min.css');  
               include('css/bootstrap.min.css');  
               include('css/owl.carousel.css');  
               include('css/magnific-popup.css');  
               include('css/animate.css');
               include('css/meanmenu.min.css');
               include('css/main.css');
               include('css/responsive.css');

         ?>  
    </style> 
	
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<?php include('header.php');?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<!-- <div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end search arewa -->
	
	<!-- breadcrumb-section 
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	 end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".BMW">BMW</li>
                            <li data-filter=".Mercedes">Mercedes</li>
                            <li data-filter=".Peugeot">Peugeot</li>
                            <li data-filter=".Porshe">Porshe</li>
                            <li data-filter=".Hyandai">Hyundai Motor</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
											<!-- ****************** -->
				<div class="col-lg-4 col-md-6 text-center BMW">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center BMW">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center BMW">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center BMW">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center BMW">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center BMW">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
											<!-- ****************** -->
				<div class="col-lg-4 col-md-6 text-center Mercedes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Mercedes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Mercedes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Mercedes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Mercedes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Mercedes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
											<!-- ****************** -->
				<div class="col-lg-4 col-md-6 text-center Peugeot">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Peugeot">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Peugeot">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Peugeot">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Peugeot">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Peugeot">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
											<!-- ****************** -->
				<!-- ****************** -->
				<div class="col-lg-4 col-md-6 text-center Porshe">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Porshe">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Porshe">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Porshe">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Porshe">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center Porshe">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
											<!-- ****************** -->
				<!-- ALL -->
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Avocado</h3>
						<p class="product-price"><span>Per Kg</span> 50$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/car_img5.png" alt=""></a>
						</div>
						<h3>Green Apple</h3>
						<p class="product-price"><span>Per Kg</span> 45$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-info-circle"></i> Details</a>
					</div>
				</div>
				
			</div>

			<!-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="images/logo1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="images/logo2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="images/logo3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="images/logo4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="images/logo5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	<?php include('footer.php');?>
	
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="js/sticker.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>

</body>
</html>