<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aisle;
use DB;

class AisleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = Aisle ::create([
            'name' => 'First Aisle',
            'department_id' =>1,
            'description' => 'first Track',
        ]);
        $data2 = Aisle ::create([
            'name' => 'Second Aisle',
            'department_id' =>1,
            'description' => 'Second Track',
        ]);
        $data3 = Aisle ::create([
            'name' => 'First Aisle',
            'department_id' =>2,
            'description' => 'First Track',
        ]);
        $data4 = Aisle ::create([
            'name' => 'Second Aisle',
            'department_id' =>2,
            'description' => 'Second Track',
        ]);
        $data4 = Aisle ::create([
            'name' => 'First Aisle',
            'department_id' =>3,
            'description' => 'First Track',
        ]);
    }
}
