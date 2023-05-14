<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = Product ::create([
            'name' => 'Pampers',
            'description' =>'',
            'height' => 110,
            'width' => 150,
            'weight' => 1,
            'size' => 'XL',
            'brand' => 'Pampers',
            'department_id'=>1,
            'image'=>'storage/products/1.png',
        ]);
        $data1 = Product ::create([
            'name' => 'Pampers',
            'description' =>'',
            'height' => 110,
            'width' => 130,
            'weight' => 1,
            'size' => 'L',
            'brand' => 'Pampers',
            'department_id'=>1,
            'image'=>'storage/products/2.png',
        ]);
        $data1 = Product ::create([
            'name' => 'Pampers',
            'description' =>'',
            'height' => 120,
            'width' => 150,
            'weight' => 1,
            'size' => '2XL',
            'brand' => 'Pampers',
            'department_id'=>1,
            'image'=>'storage/products/3.png',
        ]);
        $data1 = Product ::create([
            'name' => 'Pampers',
            'description' =>'',
            'height' => 100,
            'width' => 100,
            'weight' => 1,
            'size' => 'S',
            'brand' => 'Pampers',
            'department_id'=>1,
            'image'=>'storage/products/4.png',
        ]);
        $data1 = Product ::create([
            'name' => 'NaN Pro',
            'description' =>'',
            'height' => 100,
            'width' => 80,
            'weight' => 1,
            'size' => 'B',
            'brand' => 'Nestle',
            'department_id'=>1,
            'image'=>'storage/products/5.png',
        ]);
        $data1 = Product ::create([
            'name' => 'babyCereals',
            'description' =>'',
            'height' => 100,
            'width' => 80,
            'weight' => 1,
            'size' => 'S',
            'brand' => 'Nestle',
            'department_id'=>1,
            'image'=>'storage/products/6.png',
        ]);


        $data1 = Product ::create([
            'name' => 'Cocacola',
            'description' =>'',
            'height' => 120,
            'width' => 70,
            'weight' => 1,
            'size' => 'S',
            'brand' => 'Cocacola',
            'department_id'=>1,
            'image'=>'storage/products/7.png',
        ]);
        
        $data1 = Product ::create([
            'name' => 'Pepci',
            'description' =>'',
            'height' => 120,
            'width' => 70,
            'weight' => 1,
            'size' => 'B',
            'brand' => 'Pepci',
            'department_id'=>1,
            'image'=>'storage/products/8.png',
        ]);
        $data1 = Product ::create([
            'name' => '7UP',
            'description' =>'',
            'height' => 120,
            'width' => 70,
            'weight' => 1,
            'size' => 'S',
            'brand' => '7UP',
            'department_id'=>1,
            'image'=>'storage/products/9.png',
        ]);
    }
}
