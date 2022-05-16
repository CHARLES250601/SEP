<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/color-01.css">
</head>
<body class=" detail page ">
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

    <div class="container">
        @yield('konten')
    </div>

	<!--main area-->
	<main id="main" class="main-site">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
                            <div class="detail-media">
                                <div class="product-gallery">
                                                <img src="{{"/storage/".$Boardgame->boardgame_gambar}}" width="800" height="800" alt="{{$Boardgame->boardgame_nama}}">
                                </div>
                            </div>
                                <form action ='/DoAdd/{{$Boardgame->id}}' method="POST">
                                    @csrf
                                    <div class="detail-info">
                                        <h2 class="product-name">{{$Boardgame->boardgame_nama}}</h2>
                                        <div class="wrap-price"><span class="product-price">Rp. {{number_format($Boardgame->boardgame_harga_jual,0,'.',',')}}</span>
                                        </div>
                                        <div class="quantity-input">
                                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >

                                            <a class="btn btn-reduce" href="#"></a>
                                            <a class="btn btn-increase" href="#"></a>
                                        </div>

                                                <div class="wrap-butons">
                                                    <button class="btn add-to-cart">Add to Cart</button>
                                                </div>
                                        </div>
                                </form>


                                <div class="advance-info">
                                    <div class="tab-control normal">
                                        <a href="#description" class="tab-control-item active">description</a>
                                        <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                                        <a href="#review" class="tab-control-item">Reviews</a>
                                    </div>
                                    <div class="tab-contents">
                                        <div class="tab-content-item active" id="description">
                                            <p>{{$Boardgame->boardgame_deskripsi}}</p>
                                        </div>
                                        <div class="tab-content-item " id="add_infomation">
                                            <table class="shop_attributes">
                                                <tbody>
                                                    <tr>
                                                        <th>Weight</th><td class="product_weight">1 kg</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-content-item " id="review">

                                            <div class="wrap-review-form">

                                                <div id="comments">
                                                    <h2 class="woocommerce-Reviews-title">01 review for <span>{{$Boardgame->boardgame_nama}}</span></h2>
                                                    <ol class="commentlist">
                                                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                            <div id="comment-20" class="comment_container">
                                                                <img alt="" src="assets/images/author-avata.jpg" height="80" width="80">
                                                                <div class="comment-text">
                                                                    <div class="star-rating">
                                                                        <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                                    </div>
                                                                    <p class="meta">
                                                                        <strong class="woocommerce-review__author">admin</strong>
                                                                        <span class="woocommerce-review__dash"></span>
                                                                        <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
                                                                    </p>
                                                                    <div class="description">
                                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div><!-- #comments -->

                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div id="respond" class="comment-respond">

                                                            <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                                                <p class="comment-notes">
                                                                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                                </p>
                                                                <div class="comment-form-rating">
                                                                    <span>Your rating</span>
                                                                    <p class="stars">

                                                                        <label for="rated-1"></label>
                                                                        <input type="radio" id="rated-1" name="rating" value="1">
                                                                        <label for="rated-2"></label>
                                                                        <input type="radio" id="rated-2" name="rating" value="2">
                                                                        <label for="rated-3"></label>
                                                                        <input type="radio" id="rated-3" name="rating" value="3">
                                                                        <label for="rated-4"></label>
                                                                        <input type="radio" id="rated-4" name="rating" value="4">
                                                                        <label for="rated-5"></label>
                                                                        <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                                    </p>
                                                                </div>
                                                                <p class="comment-form-author">
                                                                    <label for="author">Name <span class="required">*</span></label>
                                                                    <input id="author" name="author" type="text" value="">
                                                                </p>
                                                                <p class="comment-form-email">
                                                                    <label for="email">Email <span class="required">*</span></label>
                                                                    <input id="email" name="email" type="email" value="" >
                                                                </p>
                                                                <p class="comment-form-comment">
                                                                    <label for="comment">Your review <span class="required">*</span>
                                                                    </label>
                                                                    <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                                </p>
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                </p>
                                                            </form>

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
	</main>

	<script src="/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.flexslider.js"></script>
	<script src="/assets/js/chosen.jquery.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/jquery.countdown.min.js"></script>
	<script src="/assets/js/jquery.sticky.js"></script>
	<script src="/assets/js/functions.js"></script>
	<!--footer area-->
</body>
</html>
