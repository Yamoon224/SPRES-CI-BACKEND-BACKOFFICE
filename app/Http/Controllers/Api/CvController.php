<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cvs\StoreRequest As StoreCvRequest;
use App\Http\Requests\Cvs\UpdateRequest As UpdateCvRequest;
use App\Http\Resources\CvResource;
use App\Repositories\CvRepository;

class CvController extends Controller
{
    public function __construct(private CvRepository $repository) {}

    public function index()
    {
        return CvResource::collection($this->repository->paginate(with: ['user']));
    }

    public function store(StoreCvRequest $request)
    {
        $cv = $this->repository->create($request->validated());
        return new CvResource($cv);
    }

    public function show($id)
    {
        return new CvResource($this->repository->find($id, ['user']));
    }

    public function update(UpdateCvRequest $request, $id)
    {
        $cv = $this->repository->update($id, $request->validated());
        return new CvResource($cv);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'CV deleted successfully']);
    }
}
