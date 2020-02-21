<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'customer_id',
        'voucher_code',
        'description',
        'discount',
        'end_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
