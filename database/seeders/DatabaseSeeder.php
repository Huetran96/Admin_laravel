<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0;$i<50;$i++){
            DB::table('products')->insert([
                'name'=> 'Dien Thoai AA'.$i,
                'price'=> 3500000+$i*10000,
                'size'=> '10x15x0.7cm',
                'unit'=>'cái',
                'producer'=>'samsung',
                'quanity'=>20,
                'status'=>1
            ]);

        }
    }
}
