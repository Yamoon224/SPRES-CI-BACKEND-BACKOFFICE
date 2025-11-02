<?php

namespace App\Http\Controllers;

use App\Http\Requests\Applications\StoreRequest As StoreApplicationRequest;
use App\Http\Requests\Applications\UpdateRequest As UpdateApplicationRequest;
use App\Repositories\Contracts\ApplicationRepositoryInterface;

class ApplicationController extends Controller
{
    protected ApplicationRepositoryInterface $repository;

    public function __construct(ApplicationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $applications = $this->repository->all();
        return response()->json($applications);
    }

    public function store(StoreApplicationRequest $request)
    {
        $this->repository->create($request->validated());
        return redirect()->route('applications.index');
    }

    public function show($id)
    {
        $application = $this->repository->find($id);
        return view('applications.show', compact('application'));
    }

    public function update(UpdateApplicationRequest $request, $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('applications.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('applications.index');
    }
}
