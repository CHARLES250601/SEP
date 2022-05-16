<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping Cart</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/color-01.css">
</head>
<body class=" shopping-cart page ">

{{-- @dd(\Auth::User()->carts) --}}

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
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+62 69696969)
                                    </a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
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
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{'Cart'}}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="cart.html" class="link-term mercado-item-title">Checkout</a>
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

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{'/'}}" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
                        @foreach (\Auth::user()->carts as $value)
                            {{-- @dd($value->boardgames) --}}
                            <li class="pr-cart-item">
                                <div class="product-image">
                                    <figure> <img src="{{"/storage/".$value->boardgames->boardgame_gambar}}" width="800" height="800" alt="{{$value->boardgames->boardgame_nama}}"></figure>
                                </div>
                                <div class="product-name">
                                    <a class="link-to-product" href="#">{{$value->boardgames->boardgame_nama}}</a>
                                </div>
                                <div class="price-field produtc-price"><p class="price">Rp.{{number_format ($value->boardgames->boardgame_harga_jual,0,'.',',')}}</p></div>
                                <div class="quantity">
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">
                                        <a class="btn btn-increase" href="#"></a>
                                        <a class="btn btn-reduce" href="#"></a>
                                    </div>
                                </div>
                                <div class="price-field sub-total"><p class="price">Rp.{{number_format ($value->boardgames->boardgame_harga_jual,0,'.',',')}}</p></div>
                                <div class="delete">
                                    <a href="#" class="btn btn-delete" title="">
                                        <span>Delete from your cart</span>
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </li>

                        @endforeach

					</ul>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
						</label>
						<a class="btn btn-checkout" href="checkout.html">Check out</a>
						<a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#">Clear Shopping Cart</a>
						<a class="btn btn-update" href="#">Update Shopping Cart</a>
					</div>
				</div>
	</main>


			<!--End function info-->

	<script src="/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/chosen.jquery.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/jquery.sticky.js"></script>
	<script src="/assets/js/functions.js"></script>
</body>
</html>
