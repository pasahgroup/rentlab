<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multibooking extends Model
{
    use HasFactory;
     protected $fillable = [
         'name',
          'brand_id',
          'model_id',
          'price',
          'no_car',
           'no_days',
          'total_costs',
          'pick_location',
          'drop_location',
          'booked_by', 
        'pick_time',
        'drop_time'
    ];

     public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
      public function modelb()
    {
        return $this->belongsTo(modelb::class);
    }
}
