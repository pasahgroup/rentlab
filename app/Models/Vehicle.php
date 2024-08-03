<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'object',
        'specifications' => 'object',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function seater()
    {
        return $this->belongsTo(Seater::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class)->with('user');
    }

    public function rents()
    {
        return $this->hasMany(RentLog::class, 'vehicle_id');
    }

    public function booked()
    {
        return $this->rents()->where('drop_time', '>', now())->where('status', 1)->exists();
    }
}
