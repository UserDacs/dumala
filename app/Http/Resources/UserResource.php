<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'prefix' => $this->prefix,
            'name' => $this->name,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'role' => $this->role,
            'contact' => $this->contact,
            'email' => $this->email,
            'profile_image' => $this->profile_image,
            'register_type' => $this->register_type,
            'pass_coin' => $this->pass_coin,
            'user_status' => $this->user_status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}