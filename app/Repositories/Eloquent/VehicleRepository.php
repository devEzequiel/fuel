<?php

namespace App\Repositories\Eloquent;


use App\Models\Vehicle;
use App\Repositories\Contracts\VehicleRepositoryInterface as VehicleInterface;

class VehicleRepository extends AbstractRepository implements VehicleInterface
{
    protected $model = Vehicle::class;

    public function updateVehicle(array $data, int $id): bool
    {
        $vehicle = $this->find($id);

        $vehicle->update($data);

        return true;
    }

    public function deleteVehicle(int $id): bool
    {
        $vehicle = $this->find($id);

        $vehicle->delete();

        return true;
    }
}
