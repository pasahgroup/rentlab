<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multbooking extends Model
{
    use HasFactory;
     protected $fillable = [
         'name',
          'brand_id',
          'model_id',
          'price',
          'no_days',
          'total_costs'
          'pick_location',
          'drop_location',
          'booked_by', 
        'pick_time',
        'drop_time'
    ];
}
