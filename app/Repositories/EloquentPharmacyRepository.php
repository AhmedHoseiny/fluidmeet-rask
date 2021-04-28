<?php

namespace App\Repositories;

use App\Models\Pharmacy;
use App\Repositories\Contracts\PharmacyRepositoryInterface;

class EloquentPharmacyRepository implements PharmacyRepositoryInterface
{
    private $model;

    public function __construct(Pharmacy $model)
    {
        $this->model = $model;
    }

    public function get()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function update($id, $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
