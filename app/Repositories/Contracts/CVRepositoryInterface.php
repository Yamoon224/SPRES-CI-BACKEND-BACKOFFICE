<?php

namespace App\Repositories\Contracts;

interface CVRepositoryInterface extends BaseRepositoryInterface
{
    public function byUser($userId);
}
