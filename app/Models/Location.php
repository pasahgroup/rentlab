<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;


     public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'name')->where('status', 1);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
