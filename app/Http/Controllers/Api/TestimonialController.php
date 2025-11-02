<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonials\StoreRequest As StoreTestimonialRequest;
use App\Http\Requests\Testimonials\UpdateRequest As UpdateTestimonialRequest;
use App\Http\Resources\TestimonialResource;
use App\Repositories\TestimonialRepository;

class TestimonialController extends Controller
{
    public function __construct(private TestimonialRepository $repository) {}

    public function index()
    {
        return TestimonialResource::collection($this->repository->paginate(with: ['user']));
    }

    public function store(StoreTestimonialRequest $request)
    {
        $testimonial = $this->repository->create($request->validated());
        return new TestimonialResource($testimonial);
    }

    public function show($id)
    {
        return new TestimonialResource($this->repository->find($id, ['user']));
    }

    public function update(UpdateTestimonialRequest $request, $id)
    {
        $testimonial = $this->repository->update($id, $request->validated());
        return new TestimonialResource($testimonial);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Testimonial deleted successfully']);
    }
}
