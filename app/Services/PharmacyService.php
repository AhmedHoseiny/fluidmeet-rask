<?php

namespace App\Services;

use App\Repositories\Contracts\PharmacyRepositoryInterface;

class PharmacyService
{
    private $pharmacyRepo;

    public function __construct(PharmacyRepositoryInterface $pharmacyRepo)
    {
        $this->pharmacyRepo = $pharmacyRepo;
    }

    public function list()
    {
        return $this->pharmacyRepo->get();
    }

    public function create($data)
    {
        return $this->pharmacyRepo->create($data);
    }

    public function show($id)
    {
        return $this->pharmacyRepo->findById($id);
    }

    public function update($id, $data)
    {
        return $this->pharmacyRepo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->pharmacyRepo->delete($id);
    }
}
