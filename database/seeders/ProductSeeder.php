<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
                'name'=>'HP 15 (2021) Thin & Light Ryzen 3-3250 Laptop, 8 GB RAM, 1TB HDD + 256GB SSD, 15.6" (39.2 cms) FHD Screen, Windows 10, MS Office (15s-gr0012AU) ',
                'price'=>'47142',
                'category'=>'electronics',
                'description'=>' Processor: AMD Ryzen 3 3250U (2.6 GHz base clock, up to 3.5 GHz max boost clock, 4 MB L3 cache, 2 cores)| Operating System & Preinstalled Software: Windows 10 Home | Microsoft Office Home & Student 2019 ',
            'gallery'=>'https://in-files.apjonlinecdn.com/landingpages/npi/hp-laptop-14s/images/hero_banner_mobile.jpg',
            'product_image'=>'https://images-na.ssl-images-amazon.com/images/I/41mQtYQUzmL.jpg'
            ],
            [
                'name'=>'Panasonic 1.5 Ton 5 Star Wi-Fi Twin Cool Inverter Split AC (Copper, PM 2.5 Filter, 2020 Model, CS/CU-NU18WKYW White) ',
                'price'=>'54500',
                'category'=>'electronics',
                'description'=>' Wi-Fi Split AC with Twin Cool Inverter compressor: Capacity: 1.5 Ton - Suitable for medium sized rooms (121 to 180 sq ft) | Equipped with Powerful and Dry Mode for different cooling needs.Operating',
            'gallery'=>'http://www.sakthicoolpoint.com/images/banner1.png',
            'product_image'=>'https://images-na.ssl-images-amazon.com/images/I/61vern5TkcL._SX522_.jpg'
            ]
        ]);
    }
}
