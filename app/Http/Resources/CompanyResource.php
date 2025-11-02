<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'industry'    => $this->industry,
            'website'     => $this->website,
            'address'     => $this->address,
            'description' => $this->description,
            'logo'        => env('APP_URL') . '/' . $this->logo,
            'created_at'  => $this->created_at,
        ];
    }
}
