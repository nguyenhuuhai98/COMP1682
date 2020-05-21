<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <base href="{{ asset('') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="client/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="client/css/util.css">
    <link rel="stylesheet" type="text/css" href="client/css/main.css">
    <!--===============================================================================================-->
    <!-- Alertify JS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="https://www.facebook.com/huuhai.nguyen24" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                <a href="https://www.instagram.com/haing__/" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                @if (Auth::check())
                    @if (Auth::user()->role->name == 'admin')
                        <a href="{{ route('adminadmin.dashboard') }}" class="">Admin Site</a>
                    @elseif (Auth::user()->role->name == 'staff')
                        <a href="{{ route('staff.index') }}" class="">Staff Site</a>
                    @endif
                @endif
            </div>

            <div class="search-product pos-relative bo4 of-hidden">
                <input class="s-text7 size4 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

                <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                    <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            @if (Auth::check())
                <div class="topbar-child2">
                    @if (Auth::user()->role->name == 'customer')
                        <a href="#">Change Password</a>
                        <span style="margin: 0px 10px">|</span>
                        <a href="#">Order History</a>
                        <span style="margin: 0px 10px">|</span>
                    @endif
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::current() }}">
                        <button type="submit" style="color: #666666">Log out</button>
                    </form>
                </div>
            @else
                <div class="topbar-child2">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            @endif
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="{{ route('pages.index') }}" class="logo">
                <img src="client/images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{ route('pages.index') }}">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('get.all.products') }}">Shop</a>
                        </li>

                        <li class="sale-noti">
                            <a href="product.html">Sale</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->

            @if (Auth::Check() && Auth::user()->role->name == 'customer')
            <div class="header-icons">
                <a href="{{ route('pages.index') }}" class="header-wrapicon1 dis-block">
                    <img src="client/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>
                <div class="header-wrapicon2">
                    <img src="client/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti" id="cart-quantity">{{ session('Cart') ? session('Cart')->totalQuantity : 0 }}</span>
                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <div class="change-items-cart">
                            <ul class="header-cart-wrapitem">
                                @if (session('Cart'))
                                    @foreach (session('Cart')->products as $product)
                                        <li class="header-cart-item">
                                            <div class="mini-cart-img">
                                                <img src="{{ json_decode($product['productInfo']['images'])->image1 == null ? '' : json_decode($product['productInfo']['images'])->image1 }}" alt="IMG-PRODUCT">
                                            </div>

                                            <div class="header-cart-item-txt" style="width: calc(100% - 130px);">
                                                <a href="#" class="header-cart-item-name">
                                                    {{ $product['productInfo']->name }}
                                                </a>

                                                <span class="header-cart-item-info">
                                                    {{ $product['quantity'] }} x $ {{ $product['productInfo']->price }}
                                                </span>
                                            </div>
                                            <div class="delete-cart" data-id="{{ $product['productInfo']->id }}">
                                                <a href="javascript:void(0)">x</a>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li class="header-cart-item">
                                        Your cart is empty!
                                    </li>
                                @endif
                            </ul>

                            <div class="header-cart-total">
                                 {{ session('Cart') ? 'Total: $ ' . session('Cart')->totalPrice : '' }}
                            </div>
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="{{ route('get.cart') }}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="linedivide2"></span>
                <span><i class="fas fa-user-shield"></i></span>
            </div>
                @endif
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <div class="dropdown">
            <button class="logo-mobile dropdown-toggle" data-toggle="dropdown">
                <img src="client/images/icons/logo.png" alt="IMG-LOGO">
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->

            @if (Auth::Check() && Auth::user()->role->name == 'customer')
                <div class="header-icons-mobile">
                    <div class="header-wrapicon2">
                        <img src="client/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->

                        <div class="header-cart header-dropdown">
                            <div class="change-items-cart">
                                <ul class="header-cart-wrapitem">
                                    @if (session('Cart'))
                                        @foreach (session('Cart')->products as $product)
                                            <li class="header-cart-item">
                                                <div class="mini-cart-img">
                                                    <img src="upload/banh-gao.jpeg" alt="IMG">
                                                </div>

                                                <div class="header-cart-item-txt" style="width: calc(100% - 130px);">
                                                    <a href="#" class="header-cart-item-name">
                                                        {{ $product['productInfo']->name }}
                                                    </a>

                                                    <span class="header-cart-item-info">
                                                        {{ $product['quantity'] }} x $ {{ $product['productInfo']->price }}
                                                    </span>
                                                </div>
                                                <div class="delete-cart" data-id="{{ $product['productInfo']->id }}">
                                                    <a href="javascript:void(0)">x</a>
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="header-cart-item">
                                            Your cart is empty!
                                        </li>
                                    @endif
                                </ul>

                                <div class="header-cart-total">
                                    {{ session('Cart') ? 'Total: $ ' . session('Cart')->totalPrice : '' }}
                                </div>
                            </div>
                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="{{ route('get.cart') }}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="linedivide2"></span>
                    <span><i class="fas fa-user-shield"></i></span>
                </div>
            @endif

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								hainhgch16440@fpt.edu.vn
							</span>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="https://www.facebook.com/huuhai.nguyen24" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="https://www.instagram.com/haing__/" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="{{ route('pages.index') }}">Home</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="{{ route('get.all.products') }}">Shop</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.html">Sale</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="about.html">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            <div class="search-product pos-relative bo4 of-hidden">
                <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

                <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                    <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-65 p-r-65 p-lr-0-xl1">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon6">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size26">
                    Any questions? Let us know in office at 8th Ton That Thuyet St, Nam Tu Liem, Hanoi or call us on (+84) 971 682 462
                </p>

                <div class="flex-m p-t-30">
                    <a href="https://www.facebook.com/huuhai.nguyen24" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="https://www.instagram.com/haing__/" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon7">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Dresses
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sunglasses
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon7">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Search
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        About Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contact Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon7">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon6">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="client/images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="client/images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="client/images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="client/images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="client/images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2020 All rights reserved. | From HaiNH with <i class="fa fa-heart" style="color: red" aria-hidden="true"></i></a>
        </div>
    </div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="client/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="client/js/main.js"></script>
<script src="js/client/app.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




@yield('script')

</body>
</html>
