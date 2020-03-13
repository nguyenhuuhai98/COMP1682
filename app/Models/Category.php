<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'images',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
