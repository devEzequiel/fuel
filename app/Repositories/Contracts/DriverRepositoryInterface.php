<?php

namespace App\Repositories\Contracts;

interface DriverRepositoryInterface
{
    public function find (int $id);
    public function create ($data);
    public function all();
    public function updateDriver (array $data, int $id);
    public function deleteDriver (int $id);
}
