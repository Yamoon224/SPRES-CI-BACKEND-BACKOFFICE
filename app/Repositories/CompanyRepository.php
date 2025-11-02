<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class CompanyRepository extends BaseRepository implements CompanyRepositoryInterface
{
    public function __construct(Company $model)
    {
        parent::__construct($model);
    }

    public function findByUser($userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }

    public function search(string $keyword)
    {
        return $this->model->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('industry', 'LIKE', "%{$keyword}%")
            ->get();
    }
}
