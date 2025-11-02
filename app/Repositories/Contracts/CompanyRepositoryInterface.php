<?php

namespace App\Repositories\Contracts;

interface CompanyRepositoryInterface extends BaseRepositoryInterface
{
    public function findByUser($userId);
    public function search(string $keyword);
}
