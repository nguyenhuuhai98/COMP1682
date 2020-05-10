
<!-- Recent view products -->
@if ($products)
    <section class="viewedproduct bgwhite p-t-45 p-b-138">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Recently Viewed Products
                </h3>
            </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2 row">
                    @foreach($products as $product)
                        <div class="item-slick2 p-l-15 p-r-15 col-lg-3 col-md-4 col-sm-6 ">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative @if ($product['discount'] != 0) block2-labelsale @endif">
                                    <img src="{{ json_decode($product->images)->image1 == null ? '' : json_decode($product->images)->image1 }}" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Add to Cart
                                            </button>
                                        </div>
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
    </section>
@endif
