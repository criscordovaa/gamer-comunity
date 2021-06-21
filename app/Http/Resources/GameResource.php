<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
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
            "id" => $this->id,
            "sku" => $this->sku,
            "name" => $this->name,
            "description" => $this->description,
            "players_number" => $this->players_number,
            "presale" => $this->presale,
            "full_price" => $this->full_price,
            "release_date" => $this->release_date,
            "created_at" => $this->created_at,
        ];
    }
}
