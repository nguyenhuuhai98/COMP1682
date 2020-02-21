<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'birthday',
        'gender',
        'address',
        'staff_code',
    ];

    public function shift()
    {
        return $this->hasMany(Shift::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function staffProduct()
    {
        return $this->hasMany(StaffProduct::class);
    }
}
