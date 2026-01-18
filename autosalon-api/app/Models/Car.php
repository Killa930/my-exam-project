<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

public function leads(): HasMany
{
    return $this->hasMany(Lead::class);
}

}
