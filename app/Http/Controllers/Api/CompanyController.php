<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Companies\StoreRequest As StoreCompanyRequest;
use App\Http\Requests\Companies\UpdateRequest As UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Repositories\CompanyRepository;

class CompanyController extends Controller
{
    public function __construct(private CompanyRepository $repository) {}

    public function index()
    {
        return CompanyResource::collection($this->repository->paginate());
    }

    public function show($id)
    {
        return new CompanyResource($this->repository->find($id));
    }
}
