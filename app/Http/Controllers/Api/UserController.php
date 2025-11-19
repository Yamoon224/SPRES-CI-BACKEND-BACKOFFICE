<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest as StoreUserRequest;
use App\Http\Requests\Users\UpdateRequest as UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

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

        $token = JWTAuth::fromUser($user);
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => $user,
        ]);
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

    /**
     * Login API – JWT
     */
    public function apiLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if (! $user || ! Hash::check($password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Identifiants Incorrects',
            ], 401);
        }

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => $user,
        ]);
    }

    /**
     * Logout API – JWT
     */
    public function apiLogout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->json([
            'success' => true,
            'message' => 'Déconnexion réussie'
        ]);
    }
}
