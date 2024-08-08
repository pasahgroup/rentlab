<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartype extends Model
{
    use HasFactory;
        protected $fillable  = [
        'car_body_type',
        'images' => 'object',
        'status'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'car_body_type')->where('status', 1);
    }
}
