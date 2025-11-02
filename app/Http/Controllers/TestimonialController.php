<?php

namespace App\Http\Controllers;

use App\Http\Requests\Testimonials\StoreRequest As StoreTestimonialRequest;
use App\Http\Requests\Testimonials\UpdateRequest As UpdateTestimonialRequest;
use App\Repositories\Contracts\TestimonialRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;

class TestimonialController extends Controller
{
    protected TestimonialRepositoryInterface $repository;
    protected UserRepositoryInterface $userRepository;

    public function __construct(TestimonialRepositoryInterface $repository, UserRepositoryInterface $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $testimonials = $this->repository->paginate(with: ['user']);
        $users = $this->userRepository->all();
        return view('testimonials.index', compact('testimonials', 'users'));
    }

    public function store(StoreTestimonialRequest $request)
    {
        $this->repository->create($request->validated());
        return redirect()->route('testimonials.index');
    }

    public function show($id)
    {
        $testimonial = $this->repository->find($id);
        return view('testimonials.show', compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request, $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('testimonials.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('testimonials.index');
    }
}
