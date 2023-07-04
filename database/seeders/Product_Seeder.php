<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        [
            'name'=>'Asus ROG Phone 6',
            'price'=>'71999',
            'description'=>"Snapdragon-8+ Gen1, Octa-Core, 3.2GHz-Processor, 12GB-RAM, 256-GB",
            'category'=>'Mobile',
            'gallery'=>'https://cdn1.smartprix.com/rx-iy7cT7S94-w420-h420/asus-rog-phone-6.webp'
        ],
        [
            'name'=>'OGeneral AC',
            'price'=>'35000',
            'description'=>"OGeneral 1.51066 Ton 3 Star Split Inverter Air Conditioner ASGA18CLWA-B, White",
            'category'=>'AC',
            'gallery'=>'https://m.media-amazon.com/images/I/51UlXHpU9YL._SL1500_.jpg'
        ]
        ]);
    }
}
