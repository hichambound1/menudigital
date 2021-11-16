<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DishResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_en' => $this->name_en,
            'description_en' => $this->description_en,
            'ingredients_en' => $this->ingredients_en,
            'prix' => $this->prix,
            'statu' => $this->statu,
            'photo' => $this->photo,
            'user_id' => $this->user_id,
            'category'=>new CategoryResource($this->category)
        ];
        // return parent::toArray($request);
    }
}
