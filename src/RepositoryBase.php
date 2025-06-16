<?php

namespace Soft\RepositoryBase;

use Illuminate\Database\Eloquent\Model;
use Soft\RepositoryBase\Interface\RepositoryBaseInterface;

class RepositoryBase implements RepositoryBaseInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBy(array $data)
    {
        return $this->model->where($data)->get();
    }

    public function paginate($perPage = 15)
    {
        return $this->model->paginate($perPage);
    }

    public function with(array $relations)
    {
        return $this->model->with($relations);
    }

    public function orderBy(string $column, string $direction = 'asc')
    {
        return $this->model->orderBy($column, $direction);
    }

    public function exists(array $criteria)
    {
        $query = $this->model->newQuery();

        foreach ($criteria as $field => $value) {
            $query->where($field, $value);
        }

        return $query->exists();
    }
}
