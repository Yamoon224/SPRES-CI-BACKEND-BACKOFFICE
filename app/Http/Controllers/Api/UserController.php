<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest As StoreUserRequest;
use App\Http\Requests\Users\UpdateRequest As UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(private UserRepository $repository) {}

    public function index()
    {
        return UserResource::collection($this->repository->paginate(with: ['company']));
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);
        $user = $this->repository->create($data);
        return new UserResource($user);
    }

    public function show($id)
    {
        return new UserResource($this->repository->find($id, ['company']));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->repository->update($id, $request->validated());
        return new UserResource($user);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'User deleted successfully']);
    }
}
