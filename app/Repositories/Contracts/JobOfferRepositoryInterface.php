<?php

namespace App\Repositories\Contracts;

interface JobOfferRepositoryInterface extends BaseRepositoryInterface
{
    public function activeOffers();
    public function expiredOffers();
    public function byCompany($companyId);
    public function search(string $keyword);
    public function statsByContractType();
}
