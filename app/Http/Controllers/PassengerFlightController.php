<?php

namespace App\Http\Controllers;

use App\Http\Resources\PassengerFlightResource;
use App\Models\Passenger;
use App\Models\PassengerFlight;
use Illuminate\Http\Request;

class PassengerFlightController extends Controller
{
    public function store(Request $request)
    {
        $passengerFlight = Passenger::create($request->all());

        return response()->json([
            'data' => PassengerFlightResource::collection($passengerFlight)
        ]);

    }
}
