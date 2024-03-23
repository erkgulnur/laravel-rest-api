<?php

namespace App\Http\Resources;

use App\Models\PassengerFlight;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PassengerFlightResource extends JsonResource
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
            'passenger' => new PassengerFlight($this->passenger),
            'flight_id' => new FlightResource($this->flight),
            'class_type' => $this->class_type
        ];
    }
}
