<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multbooking extends Model
{
    use HasFactory;
     protected $fillable = [
          'brand_id',
          'model_id',
          'price',
          'no_days',
          'total_costs'
          'pick_location',
          'drop_location',
        'start_date',
        'end_date',
    ];
}
