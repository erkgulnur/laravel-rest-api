<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Air Astana',
            'iata_code' => 'KC'
        ]);

        Company::create([
            'name' => 'Fly Arystan',
            'iata_code' => 'KCX'
        ]);

        Company::create([
            'name' => 'SCAT',
            'iata_code' => 'DV'
        ]);
    }
}
