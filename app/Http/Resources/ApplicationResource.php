<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'job_offer'    => new JobOfferResource($this->whenLoaded('jobOffer')),
            'user'         => new UserResource($this->whenLoaded('user')),
            'cv_url'       => $this->cv_url,
            'cover_letter' => $this->cover_letter,
            'status'       => $this->status,
            'submitted_at' => $this->submitted_at,
        ];
    }
}
