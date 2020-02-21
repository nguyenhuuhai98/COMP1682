<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'shift_id',
        'customer_id',
        'total_price',
    ];

    public function billDetail()
    {
        return $this->hasMany(BillDetail::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
