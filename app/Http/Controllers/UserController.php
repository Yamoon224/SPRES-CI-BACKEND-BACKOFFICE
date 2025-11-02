<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\StoreRequest As StoreUserRequest;
use App\Http\Requests\Users\UpdateRequest As UpdateUserRequest;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class UserController extends Controller
{
    protected UserRepositoryInterface $repository;
    protected CompanyRepositoryInterface $companyRepository;

    public function __construct(UserRepositoryInterface $repository, CompanyRepositoryInterface $companyRepository)
    {
        $this->repository = $repository;
        $this->companyRepository = $companyRepository;
    }

    public function index()
    {
        $users = $this->repository->all();
        return view('users.index', compact('users'));
    }

    public function candidates()
    {
        $candidates = $this->repository->candidates();
        return view('users.candidates', compact('candidates'));
    }

    public function recruiters()
    {
        $recruiters = $this->repository->recruiters();
        return view('users.recruiters', compact('recruiters'));
    }

    public function store(StoreUserRequest $request)
    {
        $this->repository->create($request->validated());
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = $this->repository->find($id);
        return view('users.show', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('users.index');
    }
}
