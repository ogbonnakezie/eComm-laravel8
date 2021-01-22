<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert([
            [
            'name'=> 'Panasonic Tv',
            'price'=> '200',
            'description'=> 'A Smart tv with much powerful features',
            'category'=> 'tv',
            'gallery'=>'https://www.bajajfinserv.in/Image_LED_TV_1_LED_354x202_desktop.jpg'
        
         ],
         [
            'name'=> 'Sony Tv',
            'price'=> '500',
            'description'=> 'A Tv with much powerful features',
            'category'=> 'tv',
            'gallery'=>'https://www.lifewire.com/thmb/s1WUa9_cpciSGMTmODj496mSjAk=/1500x1000/filters:fill(auto,1)/Samsung-UN32N5300AFXZA-1080p-LED-LCD-Smart-TV-5b421594c9e77c0054c1f861.jpg'

         ],
         [
            'name'=> 'OPPO mobile',
            'price'=> '300',
            'description'=> 'A Smartphone with 6gb ram and much powerful features',
            'category'=> 'mobile',
            'gallery'=>'https://static.toiimg.com/photo/71082578/OPPO-A5-2020-4GB-RAM.jpg'

         ],
         [
            'name'=> 'LG fridge',
            'price'=> '200',
            'description'=> 'A fridge with 6gb ram and much powerful features',
            'category'=> 'fridge',
            'gallery'=>'https://5.imimg.com/data5/SA/JZ/MX/SELLER-2694128/whirlpool-refrigerator-71229-500x500.jpg'

         ],
         ]); 
    }
}
