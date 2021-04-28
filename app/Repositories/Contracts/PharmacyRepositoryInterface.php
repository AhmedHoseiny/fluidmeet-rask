<?php

namespace App\Repositories\Contracts;

interface PharmacyRepositoryInterface
{
    public function get();

    public function findById($id);

    public function update($id, $data);

    public function create($data);

    public function delete($id);
}
