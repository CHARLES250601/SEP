<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+62 69696969)</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
                            <div class="dashboard">
                                @yield('dashboard')
                            </div>
                            <ul>
                                @if(Auth::check())
                                <li class="menu-item">Selamat Datang {{Auth::user()->username}}</span>
                                <li class="menu-item" ><a title="Register or Login" href="{{ url('logout') }}">Logout</a></li>
                                @else
                                <li class="menu-item" ><a title="Register or Login" href="{{'login'}}">Login</a></li>
                                @endif
                                <li class="menu-item" ><a title="Register or Login" href="{{'register'}}">Register</a></li>

							</ul>
						</div>
					</div>
				</div>



				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{'/'}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="shop.html" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{'Cart'}}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="checkout.html" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main id="main">
		<div class="container">

			<!--MAIN SLIDE hero banner -->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="assets/images/main-slider-1-1.jpg" alt="hero background 1" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title" style="color: white">Choose your favorite</h2>
							<p class="sale-info" style="color: white">Only price: <span class="price" style="color: white">$59.99</span></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="assets/images/main-slider-1-2.jpg" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title">Extra 25% Off</h2>
							<span class="f-subtitle">On online payments</span>
							<p class="discount-code">Use Code: #FA6868</p>
						</div>
					</div>
				</div>
			</div>
			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
                @if(isset($boardgame_genres))
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">

                            <!-- buuat for each genre -->
                        @foreach ($boardgame_genres as $key=>$value)
                            @if($key == 0)
                                <a href="#{{str_replace(" ","_",$value->nama_genre)}}" class="tab-control-item active">{{$value->nama_genre}}</a>
                            @else
                                <a href="#{{str_replace(" ","_",$value->nama_genre)}}" class="tab-control-item">{{$value->nama_genre}}</a>
                            @endif
                        @endforeach
						</div>
						<div class="tab-contents">
                            @foreach ($boardgame_genres as $key=>$value)
                                @if($key == 0)
                                    <div class="tab-content-item active" id="{{str_replace(" ","_",$value->nama_genre)}}">
                                @else
                                    <div class="tab-content-item" id="{{str_replace(" ","_",$value->nama_genre)}}">
                                 @endif

								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @foreach ($value->products as $value_product)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <!--<a href="detail.html" title={{$value_product->boardgame_nama}}>-->
                                                <a href="detail/{{$value_product['id']}}">
                                                    <figure><img src="{{ asset("storage/$value_product->boardgame_gambar") }}" width="800" height="800" alt="{{$value_product->boardgame_nama}}"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>{{$value_product->boardgame_nama}}</span></a>
                                                <div class="wrap-price"><span class="product-price">Rp. {{number_format($value_product->boardgame_harga_jual,2,'.',',')}}</span></div>
                                            </div>
                                        </div>

                                    @endforeach
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
                @endif
			</div>

		</div>

	</main>


			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022 Kelompok ecommerce. All rights reserved</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>
</body>
</html>
