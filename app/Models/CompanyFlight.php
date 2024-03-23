<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'company_id'
    ];

    public function flights()
    {
        return $this->belongsTo(Flight::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
