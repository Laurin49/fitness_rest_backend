<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'projects' => ProjectResource::collection($this->whenLoaded('projects')),
          'exercises' => ExerciseResource::collection($this->whenLoaded('exercises')),
          // 'projects' => ProjectResource::collection($this->projects()),
        ];
    }
}
