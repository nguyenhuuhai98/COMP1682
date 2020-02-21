<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffProduct extends Model
{
    protected $fillable = [
        'staff_id',
        'product_id',
        'quantity',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
