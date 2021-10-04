<?php

namespace App\Repositories\Contracts;

interface VehicleRepositoryInterface
{
    public function find (int $id);
    public function create ($data);
    public function all();
    public function updateVehicle (array $data, int $id);
    public function deleteVehicle (int $id);
}
