<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeetingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->getId(),
            'date' => $this->getDate(),
            'place' => $this->getPlace(),
        ];
    }
}
