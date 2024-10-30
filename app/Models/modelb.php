<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelb extends Model
{
    use HasFactory;
     protected $fillable = [
         'brand_id','car_model','car_model_no'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class)->where('status', 1);
    }
}
