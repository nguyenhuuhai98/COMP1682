<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'customer_code',
        'accumulated_points',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function rate()
    {
        return $this->hasMany(Rate::class);
    }
}
