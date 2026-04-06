<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['nama' => 'TV Samsung 55"',     'deskripsi' => 'Smart TV 4K UHD',          'foto' => 'tv_samsung.jpg',  'harga' => 8500000],
            ['nama' => 'Kulkas LG 2 Pintu',  'deskripsi' => 'Kulkas inverter hemat daya','foto' => 'kulkas_lg.jpg',   'harga' => 5200000],
            ['nama' => 'AC Daikin 1 PK',     'deskripsi' => 'AC inverter low watt',      'foto' => 'ac_daikin.jpg',   'harga' => 4300000],
            ['nama' => 'Mesin Cuci Panasonic','deskripsi' => 'Front loading 8kg',        'foto' => 'mc_panasonic.jpg','harga' => 3900000],
            ['nama' => 'Laptop ASUS VivoBook','deskripsi' => 'Intel i5 RAM 8GB SSD 512', 'foto' => 'laptop_asus.jpg', 'harga' => 9800000],
            ['nama' => 'HP iPhone 15',       'deskripsi' => 'Smartphone Apple 128GB',    'foto' => 'iphone15.jpg',    'harga' => 15000000],
            ['nama' => 'Microwave Sharp',    'deskripsi' => 'Microwave 23L 800W',        'foto' => 'mw_sharp.jpg',    'harga' => 1200000],
            ['nama' => 'Vacuum Cleaner Dyson','deskripsi' => 'Cordless vacuum 300W',     'foto' => 'dyson.jpg',       'harga' => 7600000],
            ['nama' => 'Speaker JBL Flip 6', 'deskripsi' => 'Bluetooth waterproof',      'foto' => 'jbl_flip6.jpg',   'harga' => 1800000],
            ['nama' => 'Kamera Canon EOS M50','deskripsi' => 'Mirrorless 24MP 4K Video', 'foto' => 'canon_m50.jpg',   'harga' => 11000000],
        ];

        DB::table('tblproducts')->insert($products);
    }
}