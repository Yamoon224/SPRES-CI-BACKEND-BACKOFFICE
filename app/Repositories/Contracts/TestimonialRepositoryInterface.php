<?php

namespace App\Repositories\Contracts;

interface TestimonialRepositoryInterface extends BaseRepositoryInterface
{
    public function byUser($userId);
}
