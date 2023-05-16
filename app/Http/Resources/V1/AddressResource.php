<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'voivodeship' => $this->voivodeship,
            'city' => $this->city,
            'street' => $this->street,
            'houseNumber' => $this->house_number,
            'postalCode' => $this->postal_code,
        ];
    }
}
