<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;
use DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = Stock ::create([
            'product_id' => 6,
            'bay_id' => 6,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
        $data2 = Stock ::create([
            'product_id' => 6,
            'bay_id' => 5,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
        $data1 = Stock ::create([
            'product_id' => 5,
            'bay_id' => 5,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
       
        $data1 = Stock ::create([
            'product_id' => 1,
            'bay_id' => 1,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
        $data2 = Stock ::create([
            'product_id' => 1,
            'bay_id' => 1,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
        $data3 = Stock ::create([
            'product_id' => 2,
            'bay_id' => 1,
            "status" => "assign",
            'aisle_id' => 1,
            'department_id' => 1,
        ]);
        $data4 = Stock ::create([
            'product_id' => 2,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
        $data5 = Stock ::create([
            'product_id' => 3,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "assign",
            'department_id' => 1,
        ]);
        $data1 = Stock ::create([
            'product_id' => 1,
            'bay_id' => 1,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 1,
        ]);
        $data2 = Stock ::create([
            'product_id' => 1,
            'bay_id' => 1,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 1,
        ]);
        $data3 = Stock ::create([
            'product_id' => 2,
            'bay_id' => 1,
            "status" => "notAssign",
            'aisle_id' => 1,
            'department_id' => 1,
        ]);
        $data4 = Stock ::create([
            'product_id' => 2,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 1,
        ]);
        $data5 = Stock ::create([
            'product_id' => 3,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 1,
        ]);
        $data4 = Stock ::create([
            'product_id' => 5,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 1,
        ]);
        $data5 = Stock ::create([
            'product_id' => 6,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 1,
        ]);
        $data5 = Stock ::create([
            'product_id' => 7,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 2,
        ]);
        $data4 = Stock ::create([
            'product_id' => 8,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 2,
        ]);
        $data5 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 2,
            'aisle_id' => 1,
            "status" => "notAssign",
            'department_id' => 2,
        ]);
       
        
        $data4 = Stock ::create([
            'product_id' => 7,
            'bay_id' => 13,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data4 = Stock ::create([
            'product_id' => 7,
            'bay_id' => 13,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data4 = Stock ::create([
            'product_id' => 7,
            'bay_id' => 13,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data5 = Stock ::create([
            'product_id' => 8,
            'bay_id' => 15,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data5 = Stock ::create([
            'product_id' => 8,
            'bay_id' => 15,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
       
        $data5 = Stock ::create([
            'product_id' => 8,
            'bay_id' => 15,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 17,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 17,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 17,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 17,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 17,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 17,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
       


        $data1 = Stock ::create([
            'product_id' => 7,
            'bay_id' => 16,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 8,
            'bay_id' => 16,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
        $data1 = Stock ::create([
            'product_id' => 9,
            'bay_id' => 16,
            'aisle_id' => 3,
            "status" => "assign",
            'department_id' => 2,
        ]);
    }
}
