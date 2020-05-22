<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VoucherRequest;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vouchers = Voucher::orderBy('id', 'DESC')->paginate(10);

        return view('admin.pages.voucher.vouchers', [
            'vouchers' => $vouchers,
        ]);
    }

    public function store(VoucherRequest $request)
    {
        $voucher = Voucher::create($request->all());

        return response()->json($voucher);
    }

}
