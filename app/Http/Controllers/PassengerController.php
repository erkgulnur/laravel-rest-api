<?php

namespace App\Http\Controllers;

use App\Http\Requests\Passenger\PassengerStoreRequest;
use App\Http\Requests\Passenger\PassengerUpdateRequest;
use App\Http\Resources\PassengerResource;
use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();

        return response()->json([
            'data' => PassengerResource::collection($passengers)
        ]);
    }

    public function store(PassengerStoreRequest $request)
    {
        $passenger = Passenger::create($request->validated());

        return response()->json([
            'message' => 'Success',
            'data' => new PassengerResource($passenger)
        ], 201);
    }

    public function show(Passenger $passenger)
    {
        return response()->json([
            'message' => 'Success',
            'data' => new PassengerResource($passenger)
        ], 200);        
    }

    public function update(Passenger $passenger, PassengerUpdateRequest $request)
    {
        $passenger->update($request->validated());

        return response()->json([
            'message' => 'Success',
            'data' => new PassengerResource($passenger)
        ], 200);
    }

    public function destroy(Passenger $passenger)
    {
        $passenger->delete();

        return response()->json([
            'message' => 'success',
            'data' => []
        ], 204);
    }
}
