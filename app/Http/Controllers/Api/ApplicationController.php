<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Applications\StoreRequest As StoreApplicationRequest;
use App\Http\Requests\Applications\UpdateRequest As UpdateApplicationRequest;
use App\Http\Resources\ApplicationResource;
use App\Repositories\ApplicationRepository;

class ApplicationController extends Controller
{
    public function __construct(private ApplicationRepository $repository) {}

    public function index()
    {
        return ApplicationResource::collection($this->repository->paginate(with: ['user', 'jobOffer']));
    }

    public function store(StoreApplicationRequest $request)
    {
        $application = $this->repository->create($request->validated());
        return new ApplicationResource($application);
    }

    public function show($id)
    {
        return new ApplicationResource($this->repository->find($id, ['user', 'jobOffer']));
    }

    public function update(UpdateApplicationRequest $request, $id)
    {
        $application = $this->repository->update($id, $request->validated());
        return new ApplicationResource($application);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Application deleted successfully']);
    }
}
