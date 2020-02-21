<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'owner_id',
        'owner',
        'owner_type',
        'url',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
