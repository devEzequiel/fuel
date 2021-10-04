<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fueling extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'date',
        'fuel_type',
        'quantity'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function fuelType()
    {
        return $this->hasOne(FuelTypes::class);
    }
}
