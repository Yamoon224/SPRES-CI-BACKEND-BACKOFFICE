<?php

namespace App\Repositories;

use App\Models\JobOffer;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\JobOfferRepositoryInterface;

class JobOfferRepository extends BaseRepository implements JobOfferRepositoryInterface
{
    public function __construct(JobOffer $model)
    {
        parent::__construct($model);
    }

    public function activeOffers()
    {
        return $this->model->where('status', 'active')->get();
    }

    public function expiredOffers()
    {
        return $this->model->where('status', 'expired')->get();
    }

    public function byCompany($companyId)
    {
        return $this->model->where('company_id', $companyId)->get();
    }

    public function search(string $keyword)
    {
        return $this->model->where('title', 'LIKE', "%{$keyword}%")
            ->orWhere('description', 'LIKE', "%{$keyword}%")
            ->get();
    }

    public function statsByContractType()
    {
        return $this->model
            ->select('contract_type', DB::raw('COUNT(*) as total'))
            ->groupBy('contract_type')
            ->pluck('total', 'contract_type');
    }
}
