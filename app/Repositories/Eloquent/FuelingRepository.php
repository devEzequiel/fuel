<?php

namespace App\Repositories\Eloquent;


use App\Exceptions\FuelQuantityException;
use App\Exceptions\FuelTypeException;
use App\Models\Fueling;
use App\Models\Vehicle;
use App\Repositories\Contracts\FuelingRepositoryInterface as FuelingInterface;

class FuelingRepository extends AbstractRepository implements FuelingInterface
{
    protected $model = Fueling::class;

    public function createFueling($data)
    {
        if ($data['tank_capacity'] < $data['quantity']) {
            throw new FuelQuantityException('Quantity is greater than tank capacity of this vehicle', 422);
        }

        if ($data['fuel_type'] != $data['vehicle_fuel_type']) {
            throw new FuelTypeException('This vehicle does not use this fuel', 422);
        }

        $this->create($data);

        return true;
    }
}
