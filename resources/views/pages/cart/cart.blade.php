@extends('layouts.app')

@section('title')
    <title>Supermarket | Shopping Cart</title>
@stop
@section('content')

    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(upload/cart-banner.jpg);">
        <h2 class="l-text2 t-center">
            Cart
        </h2>
    </section>

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <thead>
                            <tr class="table-head">
                                <th class="column-1"></th>
                                <th class="column-2">Product</th>
                                <th class="column-3">Price</th>
                                <th class="column-3 p-l-30">Quantity</th>
                                <th class="column-5">Total</th>
                                <th class="column-6"></th>
                            </tr>
                        </thead>
                        <tbody class="body-cart">
                            @if (session('Cart'))
                                @foreach (session('Cart')->products as $product)
                                    {{--                                {{ dd($product) }}--}}
                                    <tr class="table-row">
                                        <td class="column-1">
                                            <div class="mini-cart-img b-rad-4 o-f-hidden">
                                                <img src="upload/banh-gao.jpeg" alt="IMG-PRODUCT">
                                            </div>
                                        </td>
                                        <td class="column-2">{{ $product['productInfo']->name }}</td>
                                        <td class="column-3">$ {{ $product['productInfo']->price }}</td>
                                        <td class="column-4">
                                            <div class="flex-w bo5 of-hidden w-size17">
                                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                                </button>

                                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{ $product['quantity'] }}">

                                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="column-3">$ {{ $product['price'] }}</td>
                                        <td class="column-5">
                                            <a href="javascript:void(0)" class="delete-list-cart" data-id="{{ $product['productInfo']->id }}">X</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="table-row">
                                    <td colspan="5" class="text-center">
                                        <h3 style="margin-bottom: 15px">Your cart is empty</h3>
                                        <a href="{{ route('get.all.products') }}" class="cart-shop-now text-center">Shop now</a>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                    <div class="size11 bo4 m-r-10">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
                    </div>

                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Apply coupon
                        </button>
                    </div>
                </div>
            </div>
            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Cart Totals
                </h5>

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12" style="border-bottom: 1px dashed #d9d9d9;">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
                </div>

                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<b>$39.00</b>
					</span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>
@stop

@section('script')
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
@stop
