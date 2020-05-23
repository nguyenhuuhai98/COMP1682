<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders =  Order::with('orderDetail', 'customer')->get();

        return view('admin.pages.order.orders', [
            'orders' => $orders,
        ]);
    }

    public function updateStatus(Request $request)
    {
        $order = Order::where('id', $request->orderId)->first();
        $oldBadge = '';
        $newBadge = '';
        if ($request->status == 'New') {
            $order->status = 'Delivering';
            $order->updated_at = Carbon::now();
            $oldBadge = 'badge-success';
            $newBadge = 'badge-info';
        } elseif ($request->status == 'Delivering') {
            $order->status = 'Done';
            $order->updated_at = Carbon::now();
            $oldBadge = 'badge-info';
            $newBadge = 'badge-primary';
        }
        $order->save();

        $user = $order->customer;
        $message = $order;
        SendEmail::dispatch($message, $user)->delay(now()->addMinute(1));

        return response()->json([
            'order' => $order,
            'oldBadge' => $oldBadge,
            'newBadge' => $newBadge,
        ]);
    }
}
