<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
    'brand',
    'model',
    'year',
    'price',
    'fuel',
    'transmission',
    'mileage',
    'image_url',
];

}
