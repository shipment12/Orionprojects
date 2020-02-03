<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'firstName' => $this->firstName,
            'id' => $this->id,
            'lastName' => $this->lastName,
            'country' => $this->country,
            'name' => $this->name,
            'type' => $this->type,
            'phone' => $this->phone,
            'email' => $this->email,
            'path'      => $this->path,
            'created_at' => $this->created_at,
        ];
    }
}
