<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PodcastResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'files' => $this->files,
            'created_at' => $this->created_at->toDateTimeString(),
            'created_at_human' => $this->created_at->diffForHumans()
        ];
    }
}