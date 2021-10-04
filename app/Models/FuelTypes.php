<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelTypes extends Model
{
    use HasFactory;

    protected $table = 'fuel_types';

    protected $fillable = [
        'name',
        'price'
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function fuelings()
    {
        return $this->belongsToMany(Fueling::class);
    }
}
