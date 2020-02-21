<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
        'shift_work',
        'staff_id',
        'device_id',
        'signed_in_at',
    ];

    public function bill()
    {
        return $this->hasMany(Bill::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function staff()
    {
        return $this->belongsTo(Shift::class);
    }
}
