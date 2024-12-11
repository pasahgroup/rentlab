<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
  use HasFactory;
      protected $fillable  = [

      'service_name',
      'title',
      'content',
      'category',
      'images' => 'object',
      'status'
    ];

  public function vehicles()
  {
      // return $this->hasMany(Vehicle::class, 'car_body_type')->where('status', 1);
       return $this->hasMany(Vehicle::class)->where('status', 1);
  }
}
