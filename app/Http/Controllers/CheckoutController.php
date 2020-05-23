<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Jobs\SendEmail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkoutForm()
    {
        return view('pages.cart.checkout');
    }

    public function checkout(Request $request)
    {
        if (!$request->paymentMethod) {
            $request->paymentMethod = 'cash on delivery';
        }
        if (!$request->phone) {
            $request->phone = Auth::user()->phone;
        }
        $cart = Session('Cart') ? Session('Cart') : null;
        $order = Order::create([
            'customer_id' => Auth::user()->id,
            'phone' => $request->phone ? $request->phone : '',
            'address' => $request->address,
            'payment' => $request->paymentMethod,
            'total_price' => $cart->totalPrice,
            'phone' => $request->phone,
        ]);
        foreach (Session('Cart')->products as $key => $product) {
            $orderDetail = OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product['productInfo']->id,
                'quantity' => $product['quantity'],
                'price' => $product['price'],
            ]);
        }
        $user = Auth::user();
        $message = $order;
        SendEmail::dispatch($message, $user)->delay(now()->addMinute(1));

        $request->session()->forget('Cart', $cart);

        return redirect()->route('pages.index');
    }

    public function applyVoucher(Request $request)
    {
        $voucher = Voucher::where('voucher_code', $request->voucher)->first();
        if ($voucher) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->applyVoucher($voucher);
            $request->session()->put('Cart', $newCart);
            $data = [
                'totalPrice' => $newCart->totalPrice,
                'discount' => $newCart->discount,
                'voucher' => $newCart->voucher,
            ];

            return response()->json($data);
        }
    }
}
