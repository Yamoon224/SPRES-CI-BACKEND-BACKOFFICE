<?php

namespace App\Repositories\Contracts;

interface ApplicationRepositoryInterface extends BaseRepositoryInterface
{
    public function byJobOffer($offerId);
    public function byUser($userId);
    public function pending();
}
