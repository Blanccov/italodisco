<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'firstSubject' => $this->first_subject,
            'secondSubject' => $this->second_subject,
            'thirdSubject' => $this->third_subject,
            'firstPercent' => $this->first_percent,
            'secondPercent' => $this->second_percent,
            'thirdPercent' => $this->third_percent,
        ];
    }
}
