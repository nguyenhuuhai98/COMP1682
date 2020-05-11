<!DOCTYPE html>
<html lang="en">

<head>
    <title>Supermarket | Checkout</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Checkout - One Step Checkout , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, checkout template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Checkout Bootstrap 4 pricing template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="pricing template, bootstrap 4 template,bootstrap 4 checkout template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="{{ asset('checkout/img/favicon.ico') }}" type="image/x-icon" />
    <meta name="description" content="">
    <!-- Alertify JS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ asset('checkout/dist/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('checkout/css/main.min.css') }}">
    <!--[if IE]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
    <style>
        .hidden {
            display: none;
        }
        .first-item {
            border-bottom: 0px !important;
            padding-bottom: 0px !important;
        }
        .center-item {
            border-bottom: 0px !important;
            border-top: 0px !important;
            padding-bottom: 0px !important;
        }
        .last-item {
            border-bottom: 1px !important;
            border-top: 0px !important;
        }
    </style>
</head>

<body>
<header id="header">
    <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pages.index') }}" id="header-logo">
                <img src="{{ asset('client/images/icons/logo.png') }}" alt="IMG-LOGO">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="{{ route('pages.index') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Feature</a>
                    </li>
                    <li class="nav-item mr-md-3">
                        <a class="nav-link text-dark" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-primary"> Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main id="main" role="main">
    <section id="checkout-banner">
        <div class="container py-5 text-center">
            <i class="fa fa-credit-card fa-3x text-light"></i>
            <h2 class="my-3">Checkout</h2>
        </div>
    </section>
    <section id="checkout-container">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-12 order-md-1">
                    <h3 class="mb-3">
                        <a href="{{ route('get.cart') }}" style="color: black">
                            <img src="https://img.icons8.com/ios-glyphs/20/000000/less-than.png" style="padding-top: 8px"/> Back to Cart
                        </a>
                    </h3>
                    <hr style="margin-bottom: 20px">
                </div>
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">{{ session('Cart')->totalQuantity }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach (session('Cart')->products as $product)
                        <li class="list-group-item d-flex justify-content-between lh-condensed
                            @if ($loop->first) first-item
                            @elseif ($loop->last) last-item
                            @else center-item
                            @endif
                            ">
                            <div>
                                <h6 class="my-0">
                                    <span class="text-muted">{{ $product['quantity'] }} x </span>{{ $product['productInfo']->name }}
                                </h6>
                            </div>
                            <span class="text-muted">$ {{ $product['price'] }}</span>
                        </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Sub Total (USD)</span>
                            <span @if (session('Cart')->voucher) style="text-decoration: line-through" @endif>
                                $ {{ session('Cart')->subTotalPrice }}
                            </span>
                        </li>
                        @if (session('Cart')->voucher)
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small id="voucher-code">{{ session('Cart')->voucher }}</small>
                                </div>
                                <span class="text-success" id="discount">-$ {{ session('Cart')->discount }}</span>
                            </li>
                        @endif
                        <li class="list-group-item d-flex justify-content-between">
                            <h4>TOTAL (USD)</h4>
                            <h5 id="total-price">$ {{ session('Cart')->totalPrice }}</h5>
                        </li>
                    </ul>
                    <form class="card p-2">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Voucher code" name="voucher">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary apply-code">Apply</button>
                            </div>
                        </div>
                    </form>
                    <div class="payment-methods">
                        <p class="pt-4 mb-2">Payment Options</p>
                        <hr>
                        <ul class="list-inline d-flex">
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-visa"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-stripe"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-paypal"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-jcb"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-discover"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-amex"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-md-1" >
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate action="{{ route('post.checkout') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone">Phone number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="(019) 237 3138">
                            <div class="invalid-feedback">
                                Please enter your shipping phone number.
                            </div>
                        </div>

                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="paypal-button-container"></div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" style="border-radius: 25px">
                                    <i class="fa fa-credit-card"></i> Cash on delivery
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<footer id="footer">
    <p class="copyright">
        © 2020 <span class="d-none d-sm-inline-block">- From HaiNH with Love <i class="mdi mdi-heart text-danger"></i></span>
        <i class="fa fa-heart"></i>
    </p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- jQuery first, then Bootstrap JS. -->
<script src="{{ asset('checkout/dist/popper/popper.min.js') }}" integrity=""></script>
<script src="{{ asset('checkout/dist/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.payment-method').on('change', function() {
        if ($(this).data('value') == 'paypal') {
            if ($('#paypal-payment').hasClass('hidden')) {
                $('#paypal-payment').removeClass('hidden')
            }
        }
        else {
            $('#paypal-payment').addClass('hidden');
        }
    });

    $('.apply-code').on('click', function(e) {
        let routeApplyCode = '{{ route('apply.voucher') }}'
        e.preventDefault();
        let voucher = $('input[name=voucher]').val();
        $.ajax({
            method: 'POST',
            url: routeApplyCode,
            data: {
                voucher: voucher,
            },
            success: function (response) {
                $('#discount').text('-$ ' +response.discount);
                $('#total-price').text('$ ' + response.totalPrice);
                $('#voucher-code').text(response.voucher);
                $('input[name=voucher]').val('');
            }
        });
    });
</script>
<script
    src="https://www.paypal.com/sdk/js?client-id=AeiK6v9BKjdEperLNsNLliN6frF2qMZUcPmR3lOfV5z7xfAs93OB85ecVRQZOFMN7oWecgS3vJN1P1b6"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let routeCheckout = '{{ route('post.checkout') }}';
    let routeIndex = '{{ route('pages.index') }}';
    let totalPrice = '{{ Session('Cart')->totalPrice }}';
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: totalPrice,
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                let information = details.purchase_units[0].shipping.address;
                let paymentMethod = 'paypal';
                let address = information.address_line_1 + ', ' + information.admin_area_2 + ', ' + information.country_code;

                $.ajax({
                    method: 'POST',
                    url: routeCheckout,
                    data: {
                        paymentMethod: paymentMethod,
                        address: address,
                    },
                    success: function (response) {
                        window.location.replace(routeIndex);
                    }
                });
                // This function shows a transaction success message to your buyer.
                alertify.success('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
</script>

</body>
</html>
