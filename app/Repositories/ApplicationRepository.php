<?php

namespace App\Repositories;

use App\Models\Application;

class ApplicationRepository extends BaseRepository
{
    public function __construct(Application $model)
    {
        parent::__construct($model);
    }

    public function byJobOffer($offerId)
    {
        return $this->model->where('job_offer_id', $offerId)->get();
    }

    public function byUser($userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }

    public function pending()
    {
        return $this->model->where('status', 'submitted')->get();
    }
}
