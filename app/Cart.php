<?php

namespace App;

class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $subTotalPrice = 0;
    public $totalQuantity = 0;
    public $voucher = null;
    public $discount = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->subTotalPrice = $cart->subTotalPrice;
            $this->totalQuantity = $cart->totalQuantity;
            $this->voucher = $cart->voucher;
            $this->discount = $cart->discount;
        }
    }

    public function addCart($product, $id, $quantity)
    {
        $newProduct = [
            'quantity' => 0,
            'productInfo' => $product,
            'price' => $product->price,
            'totalPrice' => $product->price,
        ];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity'] += $quantity;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;

        $this->products[$id] = $newProduct;
        $this->subTotalPrice += $quantity * $product->price;
        $this->totalPrice = $this->subTotalPrice;
        $this->voucher = null;
        $this->discount = 0;
        $this->totalQuantity += $quantity;
    }

    public function deleteCart($id)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->subTotalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
        $this->totalPrice = $this->subTotalPrice;
        $this->voucher = null;
        $this->discount = 0;
    }

    public function updateCart($id, $quantity)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->subTotalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->price;

        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->subTotalPrice += $this->products[$id]['price'];
        $this->totalPrice = $this->subTotalPrice;
        $this->voucher = null;
        $this->discount = 0;
    }

    public function applyVoucher($voucher)
    {
        $this->totalPrice = $this->subTotalPrice;
        $this->voucher = $voucher['voucher_code'];
        if ($voucher['unit'] == 'percent') {
            $this->discount = $this->totalPrice * $voucher['discount'] / 100;
            $this->totalPrice = $this->totalPrice - $this->discount;
        } elseif ($voucher['unit'] == 'dollars') {
            $this->discount = $voucher['discount'];
            $this->totalPrice = $this->totalPrice - $this->discount;
        }
    }
}
