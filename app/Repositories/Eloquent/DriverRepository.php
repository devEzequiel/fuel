<?php

namespace App\Repositories\Eloquent;

use App\Models\Driver;
use App\Repositories\Contracts\DriverRepositoryInterface as DriverInterface;

class DriverRepository extends AbstractRepository implements DriverInterface
{
    protected $model = Driver::class;
}
