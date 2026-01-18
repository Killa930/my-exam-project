<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lead extends Model
{
    protected $fillable = [
    'car_id',
    'name',
    'phone',
    'email',
    'message',
];


public function car(): BelongsTo
{
    return $this->belongsTo(Car::class);
}

}
