<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'barcode',
        'slug',
        'stock',
        'price',
        'sale_price',
        'status',
        'images',
        'description',
        'short_description',
        'discount',
        'point',
        'calculate_unit',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function staffProduct()
    {
        return $this->hasMany(StaffProduct::class);
    }

    public function billDetail()
    {
        return $this->hasMany(BillDetail::class);
    }

    public function rate()
    {
        return $this->hasMany(Rate::class);
    }
}
