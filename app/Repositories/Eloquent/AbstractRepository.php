<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function whereEquals($column, $value)
    {
        return $this->model->where($column, $value);
    }

    public function first()
    {
        $this->model->first();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update(array $data)
    {
        return $this->model->update($data);
    }

    public function delete()
    {
        return $this->model->delete();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
