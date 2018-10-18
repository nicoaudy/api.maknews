<?php

namespace App\Http\Resources;

use App\Http\Resources\User as UserResources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Category as CategoryResources;

class Content extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category' => new CategoryResources($this->whenLoaded('category')),
            'user' => new UserResources($this->whenLoaded('user')),
            'media' => $this->getMedia(),
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'image_cover' => $this->getFirstMedia()->getFullUrl(),
        ];
    }
}
