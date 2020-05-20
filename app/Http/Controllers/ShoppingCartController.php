<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Voucher;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ShoppingCartController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return view('pages.cart.cart');
    }

    public function addCart($id, Request $request)
    {
        $quantity = 1;
        if ($request['quantity']) {
            $quantity = $request['quantity'];
        }
        $product = $this->productRepository->find($id);
        if ($product) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id, $quantity);
            $request->session()->put('Cart', $newCart);
        }

        return response()->view('pages.cart.mini-cart');
    }

    public function deleteCart($id, Request $request)
    {
        $this->handleDeleteCart($id, $request);

        return response()->view('pages.cart.mini-cart');
    }

    public function deleteListCart($id, Request $request)
    {
        $this->handleDeleteCart($id, $request);

        return response()->view('pages.cart.new-cart');
    }

    public function handleDeleteCart($id, $request)
    {
        $product = $this->productRepository->find($id);
        if ($product) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->deleteCart($id);
            if ($newCart->totalQuantity > 0) {
                $request->session()->put('Cart', $newCart);
            } else {
                $request->session()->forget('Cart', $newCart);
            }
        }
    }

    public function updateCart($id, Request $request)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateCart($id, $request->quantity);
        $request->session()->put('Cart', $newCart);
        $data = [
            'quantity' => $newCart->products[$id]['quantity'],
            'price' => $newCart->products[$id]['price'],
            'totalPrice' => $newCart->totalPrice,
            'totalQuantity' => $newCart->totalQuantity,
        ];

        return response()->json($data);
    }
}
