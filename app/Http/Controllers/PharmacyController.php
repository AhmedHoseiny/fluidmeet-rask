<?php

namespace App\Http\Controllers;

use App\Http\Requests\PharmacyCreateRequest;
use App\Http\Requests\PharmacyDeleteRequest;
use App\Http\Requests\PharmacyIndexRequest;
use App\Http\Requests\PharmacyShowRequest;
use App\Http\Requests\PharmacyUpdateRequest;
use App\Services\PharmacyService;

class PharmacyController extends Controller
{
    private $pharmacyService;

    public function __construct(PharmacyService $pharmacyService)
    {
        $this->pharmacyService = $pharmacyService;
    }

    public function index(PharmacyIndexRequest $request)
    {
        $this->pharmacyService->list();
    }

    public function create(PharmacyCreateRequest $request)
    {
        $data = $request->only([

        ]);

        $this->pharmacyService->create($data);
    }

    public function show($id, PharmacyShowRequest $request)
    {
        $this->pharmacyService->show($id);
    }

    public function update($id, PharmacyUpdateRequest $request)
    {
        $data = $request->only([

        ]);

        $this->pharmacyService->update($id, $data);
    }

    public function delete($id, PharmacyDeleteRequest $request)
    {
        $this->pharmacyService->delete($id);
    }
}
