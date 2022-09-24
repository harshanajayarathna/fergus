<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
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
            'number' => $this->number,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'status' => $this->status,
            'client' => $this->client,
            'notes' => $this->notes
        ];
        //return parent::toArray($request);
    }
}
