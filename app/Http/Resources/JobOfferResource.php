<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobOfferResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                  => $this->id,
            'title'               => $this->title,
            'description'         => $this->description,
            'contract_type'       => $this->contract_type,
            'location'            => $this->location,
            'salary'              => $this->salary,
            'education_level'     => $this->education_level,
            'experience_required' => $this->experience_required,
            'posted_at'           => $this->posted_at,
            'expires_at'          => $this->expires_at,
            'status'              => $this->status,
            'company'             => new CompanyResource($this->whenLoaded('company')),
            'created_at'          => $this->created_at,
        ];
    }
}
