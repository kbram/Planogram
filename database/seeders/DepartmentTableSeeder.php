<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dep1 = Department ::create([
            'name' => 'Baby Products',
            'description' => 'Baby Products are products intended to be used on infants and children under the age of three (3).',
        ]);
        $dep2 = Department ::create([
            'name' => 'Beverages',
            'description' => '
            noun. any potable liquid, especially one other than water, as tea, coffee, beer, or milk: The price of the meal includes a beverage.',
        ]);
        $dep2 = Department ::create([
            'name' => 'Cloths',
            'description' => 'Cloths',
        ]);
    }
}
