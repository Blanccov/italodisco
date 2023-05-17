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
            'firstSubject' => 'first_subject',
            'secondSubject' => 'second_subcject',
            'thirdSubject' => 'third_subject',
            'firstPercent' => 'first_percent',
            'secondPercent' => 'second_percent',
            'thirdPercent' => 'third_percent'
        ];
    }
}
