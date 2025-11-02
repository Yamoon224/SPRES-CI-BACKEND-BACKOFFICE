<?php

namespace App\Repositories\Contracts;

interface ServiceRepositoryInterface extends BaseRepositoryInterface
{
    public function getActiveServices();
}
