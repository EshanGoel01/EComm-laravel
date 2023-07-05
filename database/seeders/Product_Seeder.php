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
            'name'=>'LLOYD Refridgerator',
            'price'=>'13500',
            'description'=>"188L 3 Star Direct Cool Single Door TG (FLORET BLUE-GLDC203SFBT4JC",
            'category'=>'Refrigerator',
            'gallery'=>'https://m.media-amazon.com/images/I/61L9fkzwJHL._SL1500_.jpg'
        ],
        [
            'name'=>'Samsung TV',
            'price'=>'40000',
            'description'=>"80 cm (32 Inches) Wondertainment Series HD Ready LED Smart TV UA32T4340BKXXL (Glossy Black)",
            'category'=>'TV',
            'gallery'=>'https://m.media-amazon.com/images/I/71a4ZQNqTiL._SX522_.jpg'
        ],
        [
            'name'=>'Samsung Refridgerator',
            'price'=>'19000',
            'description'=>"183 L 2 Star Digital Inverter Direct Cool Single Door Refrigerator (RR20C2412GS/NL, Gray Silver 2023 Model)",
            'category'=>'Refridgerator',
            'gallery'=>'https://m.media-amazon.com/images/I/71a4ZQNqTiL._SX522_.jpg'
        ],
        [
            'name'=>'Redmi Note 12 5G',
            'price'=>'18900',
            'description'=>"Matte Black 6GB RAM 128GB ROM | 1st Phone with 120Hz Super AMOLED and Snapdragon® 4 Gen 1 | 48MP AI Triple Camera",
            'category'=>'Mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/41lUzcNHs3L._SX300_SY300_QL70_FMwebp_.jpg'
        ],
        [
            'name'=>'OnePlus Nord 2T 5G',
            'price'=>'29000',
            'description'=>"Camera: 50MP Main Camera with Sony IMX766, Gray Shadow, 8GB RAM, 128GB Storage",
            'category'=>'Mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/41qLZhKF5ZL._SX300_SY300_QL70_FMwebp_.jpg'
        ],
        [
            'name'=>'Whirlpool Refridgerator',
            'price'=>'15600',
            'description'=>"184 L 2 Star Direct-Cool Single Door Refrigerator (205 WDE CLS 2S SAPPHIRE BLUE-Z, Sapphire Blue)",
            'category'=>'Refridgerator',
            'gallery'=>'https://m.media-amazon.com/images/I/51AWK+09OIL._SY741_.jpg'
        ]
        ]);
    }
}
