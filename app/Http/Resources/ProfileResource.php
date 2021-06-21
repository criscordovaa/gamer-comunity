<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            "username" => $this->username,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "genre" => $this->full_genre,
            "address" => $this->address,
            "ages" => $this->ages,
            "birthday" => $this->birthday,
            "phone_number" => $this->phone_number,
            "country" => $this->country,
            "created_at" => $this->created_at,
        ];
    }
}
