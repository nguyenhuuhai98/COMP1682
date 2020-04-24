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
    {{ session('Cart') ? 'Total: $ ' . session('Cart')->totalPrice : ''}}
</div>
<input type="hidden" name="totalQuantiy" id="new-cart-quantity" value="{{ session('Cart') ? session('Cart')->totalQuantity : 0}}">
