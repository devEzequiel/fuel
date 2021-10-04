<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'name',
        'fuel_type',
        'manufacturer',
        'manufacture_year',
        'tank_capacity'
    ];
}
