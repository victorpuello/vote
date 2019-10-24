<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VotationResource extends JsonResource
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
            'table' => new TableResource($this->table),
            'candidate' => new CandidateResource($this->candidate),
            'votes' => $this->votes,
        ];
    }
}
