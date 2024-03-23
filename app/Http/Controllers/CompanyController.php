<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\CompanyStoreRequest;
use App\Http\Requests\Company\CompanyUpdateRequest;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return response()->json([
            'data' => CompanyResource::collection($companies)
        ]);
    }

    public function store(CompanyStoreRequest $request)
    {
        $company = Company::create($request->validated());

        return response()->json([
            'message' => 'Success',
            'data' => new CompanyResource($company)
        ], 201);
    }

    public function show(Company $company)
    {
        return response()->json([
            'message' => 'Success',
            'data' => new CompanyResource($company)
        ], 200);        
    }

    public function update(Company $company, CompanyUpdateRequest $request)
    {
        $company->update($request->validated());

        return response()->json([
            'message' => 'Success',
            'data' => new CompanyResource($company)
        ], 200);
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return response()->json([
            'message' => 'success',
            'data' => []
        ], 204);
    }
}
