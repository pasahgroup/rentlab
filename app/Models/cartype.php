<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartype extends Model
{
    use HasFactory;
        protected $fillable  = [
        'car_body_type',
        'images',
        'status'
    ];
}
