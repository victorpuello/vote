<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class E14Resource extends JsonResource
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
            'point' => new Point($this->table->point),
            'mesa' => new TableResource($this->table),
            'path' => $this->path,
        ];
    }
}
