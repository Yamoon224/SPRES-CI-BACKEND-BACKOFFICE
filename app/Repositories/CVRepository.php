<?php

namespace App\Repositories;

use App\Models\CV;

class CVRepository extends BaseRepository
{
    public function __construct(CV $model)
    {
        parent::__construct($model);
    }

    public function byUser($userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
