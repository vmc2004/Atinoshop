<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name'=> 'Nike','logo'=>'https://th.bing.com/th/id/OIP.AmW04-XKxCF23w1Vns3pCAHaHa?w=201&h=201&c=7&r=0&o=5&dpr=1.3&pid=1.7'],
            ['name'=> 'Atino', 'logo'=>'https://th.bing.com/th/id/OIP.AmW04-XKxCF23w1Vns3pCAHaHa?w=201&h=201&c=7&r=0&o=5&dpr=1.3&pid=1.7'],
            ['name'=> 'No Where', 'logo'=>'https://th.bing.com/th/id/OIP.AmW04-XKxCF23w1Vns3pCAHaHa?w=201&h=201&c=7&r=0&o=5&dpr=1.3&pid=1.7'],
            ['name'=> 'Adidas', 'logo'=>'https://th.bing.com/th/id/OIP.AmW04-XKxCF23w1Vns3pCAHaHa?w=201&h=201&c=7&r=0&o=5&dpr=1.3&pid=1.7'],
        ]);
    }
}
