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
<!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">Billing Address</h3>
                <form action="{{'docheckout'}}" method="post" name="frm-billing">
                    @csrf
                    <p class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="first_name" value="" placeholder="Your name">
                    </p>
                    <p class="row-in-form">
                        <label for="lname">last name<span>*</span></label>
                        <input id="lname" type="text" name="last_name" value="" placeholder="Your last name">
                    </p>
                    <p class="row-in-form">
                        <label for="email">Email Addreess:</label>
                        <input id="email" type="email" name="email_address" value="" placeholder="Type your email">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone" type="number" name="phone_number" value="" placeholder="10 digits format">
                    </p>
                    <p class="row-in-form">
                        <label for="add">Address:</label>
                        <input id="add" type="text" name="address" value="address" placeholder="Street at apartment number">
                    </p>
                    <p class="row-in-form">
                        <label for="country">Country<span>*</span></label>
                        <input id="country" type="text" name="country" value="" placeholder="United States">
                    </p>
                    <p class="row-in-form">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input id="zip-code" type="number" name="post_code" value="" placeholder="Your postal code">
                    </p>
                    <p class="row-in-form">
                        <label for="city">Town / City<span>*</span></label>
                        <input id="city" type="text" name="town" value="" placeholder="City name">
                    </p>

            </div>
            <?php
                $total = 0;
            ?>
            @foreach (\Auth::user()->carts as $value)
                <?php
                    $total += $value->boardgames->boardgame_harga_jual * $value->qty;
                ?>
            @endforeach


            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Payment Method</h4>
                    <p class="summary-info"><span class="title">BCA - Rek 219310440 A/N Charles Vladimir</span></p>
                    <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">Rp.{{number_format ($total ,0,'.',',')}}</span></p>
                    <button  class="btn btn-medium">order now</button>
                </div>
            </div>
        </form>
        </div><!--end main content area-->
    </div><!--end container-->

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
