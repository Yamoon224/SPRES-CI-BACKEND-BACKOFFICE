<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'user'        => new UserResource($this->whenLoaded('user')),
            'content'     => $this->content,
            'rating'      => $this->rating,
            'created_at'  => $this->created_at,
        ];
    }
}
