<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'name',
        'device_code',
    ];

    public function shifts()
    {
        return $this->hasMany(Shift::class);
    }
}
