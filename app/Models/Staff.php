<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'staff_code',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
