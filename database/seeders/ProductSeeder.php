<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i< 10; $i++){
            DB::table('products')->insert([
                'code' => $faker->text(5),
                'name'=> $faker->text(10),
                'image'=> 'https://pos.nvncdn.com/f4d87e-8901/ps/20240530_oM8IhNpZQ3.jpeg',
                'price'=> rand(10, 200),
                'sale_price'=> rand(1,100),
                'description'=> $faker->text(100),
                'material'=> 'Vải Nhung tăm',
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,4),
            ]);
        }
    }
}
