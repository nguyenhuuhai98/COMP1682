<?php

namespace App;

class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function addCart($product, $id, $quantity)
    {
        $newProduct = [
            'quantity' => 0,
            'productInfo' => $product,
            'price' => $product->price,
        ];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity'] += $quantity;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;

        $this->products[$id] = $newProduct;
        $this->totalPrice += $quantity * $product->price;
        $this->totalQuantity += $quantity;
    }
    public function deleteCart($id)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }
}
