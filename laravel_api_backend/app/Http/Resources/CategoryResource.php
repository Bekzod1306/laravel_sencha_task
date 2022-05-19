<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id'=>$this->id,
            'cat_type'=>$this->cat_type,
            'cat_name'=>$this->cat_name,
            'created_at'=>$this->created_at,
            //'histories'=>HistoryResource::collection($this->histories),
        ];
    }
}
