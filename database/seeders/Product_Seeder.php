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
                'name'=>'Sangria Embroiderd Kurta',
                 'price'=>'1469',
                 'description'=>"Embroiderd kurta set consists of kurta, trousers and dupatta",
                 'category'=>'Women ethnics',
                 'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fashdesigners.in%2Fp%2Fwe-women-ethnics-arties-4201-4206-series&psig=AOvVaw08_rTi-kc2Zb_TxvQr0oyH&ust=1692633020214000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCPj__sDL64ADFQAAAAAdAAAAABAE',
                 'tags'=>'kurta set, kurta, trousers, dupatta,Viscose Rayon,
     Hand Wash,Three-Quarter Sleeves,A-Line,Pleated,Flared'
           ]
        ]);
    }
}
