<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\DateHelper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dailyReport()
    {
        $month = Carbon::now()->format('m');
        $today = Carbon::now()->format('Y-m-d');
        $firstDayOfMonth = Carbon::now()->year . '-' . $month . '-01';
        $dates = DateHelper::getDateInRange($firstDayOfMonth, $today);
        rsort($dates);

        return view('admin.pages.report.daily-report',  [
            'dates' => $dates,
        ]);
    }

    public function generateDailyReport(Request $request)
    {
        $orders = Order::whereDate('created_at', $request->date)->get();

        $orderDetails = OrderDetail::whereDate('created_at', $request->date)->selectRaw('count(*) as total, product_id')
            ->groupBy('product_id')->orderBy('total', 'DESC')->get();
        if (count($orderDetails) >= 10) {
            $orderDetails = $orderDetails->splice(0, 10);
        }

        return view('admin.components.daily-report', [
            'orderDetails' => $orderDetails,
            'orders' => $orders,
        ]);
    }

    public function monthlyReport()
    {
        $year = Carbon::now()->format('Y');
        $currentMonth = Carbon::now()->format('Y-m');
        $firstMonthOfYear = Carbon::now()->year . '-01';
        $months = DateHelper::getMonthInRange($firstMonthOfYear, $currentMonth);
        rsort($months);

        return view('admin.pages.report.monthly-report',  [
            'months' => array_unique($months),
        ]);
    }

    public function generateMonthlyReport(Request $request)
    {
        $orders = Order::where('created_at', 'like', '%'.$request->month.'%')->get();

        $orderDetails = OrderDetail::where('created_at', 'like', '%'.$request->month.'%')->selectRaw('count(*) as total, product_id')
            ->groupBy('product_id')->orderBy('total', 'DESC')->get();
        if (count($orderDetails) >= 10) {
            $orderDetails = $orderDetails->splice(0, 10);
        }

        return view('admin.components.monthly-report', [
            'orderDetails' => $orderDetails,
            'orders' => $orders,
        ]);
    }
}
