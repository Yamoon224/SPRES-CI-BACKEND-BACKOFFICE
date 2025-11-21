<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CvResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'user'        => new UserResource($this->whenLoaded('user')),
            'file_url'    => env('APP_URL') . '/' . $this->file_url,
            'title'       => $this->title,
            'description'  => $this->description,
            'created_at'  => $this->created_at,
        ];
    }
}
