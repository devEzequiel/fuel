<?php

namespace App\Repositories\Eloquent;

use App\Models\Driver;
use App\Repositories\Contracts\DriverRepositoryInterface as DriverInterface;

class DriverRepository extends AbstractRepository implements DriverInterface
{
    protected $model = Driver::class;

    public function updateDriver(array $data, int $id): bool
    {
        $driver = $this->find($id);

        $driver->update($data);

        return true;
    }

    public function deleteDriver(int $id): bool
    {
        $driver = $this->find($id);

        $driver->delete();

        return true;
    }
}
