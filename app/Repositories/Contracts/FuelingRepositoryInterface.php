<?php

namespace App\Repositories\Contracts;

interface FuelingRepositoryInterface
{
    public function find (int $id);
    public function createFueling ($data);
    public function all();
}
