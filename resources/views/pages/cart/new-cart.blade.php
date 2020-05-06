@if (session('Cart'))
    @foreach (session('Cart')->products as $product)
        <tr class="table-row">
            <td class="column-1">
                <div class="mini-cart-img b-rad-4 o-f-hidden">
                    <img src="upload/banh-gao.jpeg" alt="IMG-PRODUCT">
                </div>
            </td>
            <td class="column-2">{{ $product['productInfo']->name }}</td>
            <td class="column-3">$ {{ $product['productInfo']->price }}</td>
            <td class="column-4">
                <div class="flex-w bo5 of-hidden w-size17 product-cart-quantity">
                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2"
                            data-id="{{ $product['productInfo']->id }}">
                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                    </button>

                    <input class="size8 m-text18 t-center num-product"
                           id="cart-product-quantity-{{ $product['productInfo']->id }}" type="number"
                           name="num-product" value="{{ $product['quantity'] }}"
                           onchange="updateCart({{ $product['productInfo']->id }})">

                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2"
                            data-id="{{ $product['productInfo']->id }}">
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
