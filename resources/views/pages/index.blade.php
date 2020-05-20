@extends('layouts.app')

@section('title')
    <title>Supermarket | Index</title>
@stop
@section('content')
{{--    {{ dd(Auth::user()) }}--}}
    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(https://link.sun-asterisk.vn/T76oe2);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Always fresh
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="#shop-now" aria-hidden="true" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(https://link.sun-asterisk.vn/pJyk3p);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Women Collection 2018
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                            New arrivals
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                            <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(client/images/master-slide-04.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Women Collection 2018
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                            New arrivals
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="banner bgwhite p-t-40">
        <div class="container">
            <div class="row" id="category" >
                @foreach ($f0Categories as $key => $category)
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30" style="border-radius: 10px">
                        <img style="width: 370px; height: 339px"
                             src="{{ json_decode($category->images)->image == null ? '' : json_decode($category->images)->image }}" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{ route('get.products.by.category', $category->id) }}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="width: 115%; font-size: 15px">
                                {{ $category->name }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block2 -->
                    <div class="block2 wrap-pic-w pos-relative m-b-30">
                        <img style="border-radius: 10px" src="client/images/icons/bg-01.jpg" alt="IMG">

                        <div class="block2-content sizefull ab-t-l flex-col-c-m">
                            <h4 class="m-text4 t-center w-size3 p-b-8">
                                more categories
                            </h4>

                            <div class="w-size2 p-t-25">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    Shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our product -->
    <section class="bgwhite p-t-50" id="suggestion-product">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center" id="shop-now">
                    Suggestions today
                </h3>
            </div>

            <!-- Tab01 -->
            <div class="tab01">
                <div class="tab-content p-t-35">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <div class="row">
                            @foreach ($products as $key => $product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative @if ($product['discount'] != 0) block2-labelsale @endif">
                                            <img src="{{ json_decode($product['images'])->image1 == null ? '' : json_decode($product['images'])->image1 }}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                @if (Auth::user()->role->role == 'customer')
                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart" data-quantity="1" data-id="{{ $product['id'] }}">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="{{ route('get.product.by.id', $product['id']) }}" class="block2-name dis-block s-text3 p-b-5">
                                                {{ $product['name'] }}
                                            </a>
                                            @if ($product['discount'] == 0)
                                                <span class="block2-price m-text6 p-r-5">
                                                    ${{ $product['price'] }}
                                                </span>
                                            @else
                                                <span class="block2-oldprice m-text7 p-r-5">
                                                    ${{ $product['price'] }}
                                                </span>

                                                <span class="block2-newprice m-text8 p-r-5">
                                                    ${{ $product['price'] - $product['price'] * $product['discount'] / 100 }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent view products -->

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Free Delivery Worldwide
                </h4>

                <a href="#" class="s-text11 t-center">
                    Click here for more info
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    30 Days Return
                </h4>

                <span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Store Opening
                </h4>

                <span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
            </div>
        </div>
    </section>
@stop

@section('script')
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="client/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="client/vendor/sweetalert/sweetalert.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let routeGetViewedProduct = '{{ route('get.recently.viewed.product') }}'
    let products = localStorage.getItem('products');
    products = $.parseJSON(products);
    if (products.length > 0) {
        $.ajax({
            url: routeGetViewedProduct,
            method: 'POST',
            data: { id: products },
            success: function(response) {
                $('#suggestion-product').after(response);
            }
        });
    }
</script>

@stop
