<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\StoreRequest As StoreServiceRequest;
use App\Http\Requests\Services\UpdateRequest As UpdateServiceRequest;
use App\Http\Resources\ServiceResource;
use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    public function __construct(private ServiceRepository $repository) {}

    public function index()
    {
        return ServiceResource::collection($this->repository->paginate());
    }

    public function show($id)
    {
        return new ServiceResource($this->repository->find($id));
    }
}
