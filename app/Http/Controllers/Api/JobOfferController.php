<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobOffers\StoreRequest As StoreJobOfferRequest;
use App\Http\Requests\JobOffers\UpdateRequest As UpdateJobOfferRequest;
use App\Http\Resources\JobOfferResource;
use App\Repositories\JobOfferRepository;

class JobOfferController extends Controller
{
    public function __construct(private JobOfferRepository $repository) {}

    public function index()
    {
        return JobOfferResource::collection($this->repository->paginate(with: ['company']));
    }

    public function store(StoreJobOfferRequest $request)
    {
        $offer = $this->repository->create($request->validated());
        return new JobOfferResource($offer);
    }

    public function show($id)
    {
        return new JobOfferResource($this->repository->find($id, ['company']));
    }

    public function update(UpdateJobOfferRequest $request, $id)
    {
        $offer = $this->repository->update($id, $request->validated());
        return new JobOfferResource($offer);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Job offer deleted successfully']);
    }
}
