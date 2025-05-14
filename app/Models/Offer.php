<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
  use HasFactory;
         protected $fillable  = [
        'car_model',
        'percent',
        'start_date',
        'start_date',
        'status'
    ];
}
