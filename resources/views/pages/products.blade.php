@extends('layouts.app')

@section('title')
    <title>
        @isset ($category)
            {{ $category->name }}
        @else
            All Products
        @endif
    </title>
@stop
@section('content')
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(
    @isset ($category)
    {{ $category->banner }}
    @else
        upload/banners/1.jpg
    @endif
    );">
        <h2 class="l-text2 t-center">
            @isset ($category)
                {{ $category->name }}
            @else
                All Products
            @endif
        </h2>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            @isset ($category)
                                {{ $category->name }}
                            @else
                                All Categories
                            @endif
                        </h4>

                        <ul class="p-b-54">
                            @foreach ($categories as $key => $cat)
                            <li class="p-t-4">
                                <a href="{{ route('get.products.by.category', $cat->id) }}" class="s-text13 active1">
                                    {{ $cat->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="search-product pos-relative bo4 of-hidden">
                            <input class="s-text7 size6 p-l-23 p-r-50 search-products" type="text" name="search-product" placeholder="Search Products...">
                            <input type="hidden" name="" id="category_id"
                                   value="@isset ($category) {{ $category->id }} @endif">
                            <button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                <select class="selection-2" name="sorting">
                                    <option>Default Sorting</option>
                                    <option>Popularity</option>
                                    <option>Price: low to high</option>
                                    <option>Price: high to low</option>
                                </select>
                            </div>
                        </div>

                        <span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 results
						</span>
                    </div>
                    <div class="product-search">
                        <!-- Product -->
                        <div class="row">
                            @foreach ($products as $key => $product)
                                <div class="col-sm-12 col-md-6 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative @if ($product['discount'] != 0) block2-labelsale @endif">
                                            <img src="{{ json_decode($product['images'])->image1 == null ? '' : json_decode($product['images'])->image1 }}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                @if (Auth::Check() && @if (Auth::Check() && Auth::user()->role->name == 'customer')
                                                    <div class="w-size1 trans-0-4" style="position: absolute;left: 50%;transform: translateX(-50%);bottom: 10px;">
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
                        <!-- Pagination -->
                        <div class="text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>
@stop

@section('script')
    <script type="text/javascript">
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="client/vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="client/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="client/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="client/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="client/vendor/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

    <!--===============================================================================================-->
    <script type="text/javascript" src="client/vendor/noui/nouislider.min.js"></script>
@stop
