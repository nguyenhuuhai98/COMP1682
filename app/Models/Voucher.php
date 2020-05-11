<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'voucher_code',
        'description',
        'discount',
        'unit',
        'end_date',
    ];

}
