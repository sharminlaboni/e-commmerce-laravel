<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            'Square Pharmaceuticals Limited',
            'Incepta Pharmaceutical Ltd',
            'Beximco Pharmaceuticals Ltd',
            'Opsonin Pharma Ltd',
            'Renata Limited',
            'Healthcare Pharmaceuticals Limited',
        ];

        foreach ($companies as $company) {
            Brand::create(['name' => $company]);
        }
    }
}
