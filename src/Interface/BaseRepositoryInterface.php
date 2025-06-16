<?php

namespace Soft\RepositoryBase\Interface;

interface BaseRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);

    public function findBy(array $data);

    public function paginate($perPage = 15);

    public function with(array $relations);

    public function orderBy(string $column, string $direction = 'asc');

    public function exists(array $criteria);
}
