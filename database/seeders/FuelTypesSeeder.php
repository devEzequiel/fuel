<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuel_types')->insert([
            'name' => 'Gasoline',
            'price' => 4.29
        ]);
        DB::table('fuel_types')->insert([
            'name' => 'Ethanol',
            'price' => 2.99
        ]);
        DB::table('fuel_types')->insert([
            'name' => 'Diesel',
            'price' => 2.09
        ]);
    }
}
