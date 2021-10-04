<?php

namespace App\Repositories\Eloquent;


use App\Models\Fueling;
use App\Models\Vehicle;
use App\Repositories\Contracts\FuelingRepositoryInterface as FuelingInterface;

class FuelingRepository extends AbstractRepository implements FuelingInterface
{
    protected $model = Fueling::class;
}
