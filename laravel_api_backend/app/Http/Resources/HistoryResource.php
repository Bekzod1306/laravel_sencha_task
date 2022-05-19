<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HistoryResource extends JsonResource
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
            'category_id'=>$this->category_id,
            'sum'=>$this->sum,
            'total'=>$this->total,
            'comments'=>$this->comments,
            'created_at'=>$this->created_at,
            //'categories'=>CategoryResource::collection($this->categories),
        ];
    }
}
