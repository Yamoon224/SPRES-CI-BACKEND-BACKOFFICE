<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function findByEmail(string $email)
    {
        return $this->model->where('email', $email)->first();
    }

    public function recruiters()
    {
        return $this->model->where('role', 'recruiter')->get();
    }

    public function candidates()
    {
        return $this->model->with('company')->where('role', 'candidate')->get();
    }
}
