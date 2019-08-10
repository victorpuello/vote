<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\User;
use App\Http\Resources\User as UserResource;
class Users extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return ['data' => $this->collection,];
        $this->collection->transform(function (User $user) {
            return (new UserResource($user));
        });
        return parent::toArray($request);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function with($request)
    {
        $recurso = $this->resource->jsonSerialize();
//        dd($recurso);
        return [
            'meta' => [
                "page" => $recurso["from"],
                "pages" => $recurso["last_page"],
                "perpage" => $recurso["per_page"],
                'sort' => 'asc',
                'field' => 'id'
            ],
        ];
    }
}
