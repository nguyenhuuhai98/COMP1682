<!-- Product -->
<div class="row">
    @foreach ($products as $key => $product)
        <div class="col-sm-12 col-md-6 col-lg-3 p-b-50">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-img wrap-pic-w of-hidden pos-relative @if ($product['discount'] != 0) block2-labelsale @endif">
                    <img src="upload/banh-gao.jpeg" alt="IMG-PRODUCT">

                    <div class="block2-overlay trans-0-4">
                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                        </a>

                        <div class="w-size1 trans-0-4" style="position: absolute;left: 50%;transform: translateX(-50%);bottom: 10px;">
                            <!-- Button -->
                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart" data-quantity="1" data-id="{{ $product['id'] }}">
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
