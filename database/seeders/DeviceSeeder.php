<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    public function run(): void
    {
        $devices = [
            ['serial_number' => 'SN001', 'user' => 1, 'name' => 'MacBook Pro mid2012', 'year' => '2012', 'category' => 'ordinateur', 'added_date' => now()],
            /*['serial_number' => 'SN002', 'name' => 'iMac mid2011', 'year' => '2011', 'category' => 'ordinateur'],
            ['serial_number' => 'SN003', 'name' => 'MacBook Pro mid2010', 'year' => '2010', 'category' => 'ordinateur'],
            ['serial_number' => 'SN004', 'name' => 'iPhone SE 3', 'year' => '2022', 'category' => 'téléphonie'],
            ['serial_number' => 'SN005', 'name' => 'iPhone 6S', 'year' => '2015', 'category' => 'téléphonie'],
            ['serial_number' => 'SN006', 'name' => 'Samsung Galaxy A10', 'year' => '2019', 'category' => 'téléphonie'],
            ['serial_number' => 'SN007', 'name' => 'Huawei P8 Lite Ale-l21', 'year' => '2015', 'category' => 'téléphonie'],
            ['serial_number' => 'SN008', 'name' => 'HP Stream 11-ak1000nf', 'year' => '2020', 'category' => 'ordinateur'],
            ['serial_number' => 'SN009', 'name' => 'iMac G3', 'year' => '1999', 'category' => 'ordinateur'],
            ['serial_number' => 'SN010', 'name' => 'New 2DS XL', 'year' => '2017', 'category' => 'jeux vidéo'],
            ['serial_number' => 'SN011', 'name' => 'Old 3DS', 'year' => '2011', 'category' => 'jeux vidéo'],
            ['serial_number' => 'SN012', 'name' => 'GameCube', 'year' => '2001', 'category' => 'jeux vidéo'],
            ['serial_number' => 'SN013', 'name' => 'Xbox One S', 'year' => '2016', 'category' => 'jeux vidéo'],
            ['serial_number' => 'SN014', 'name' => 'Apple Watch Series 5 (40mm)', 'year' => '2019', 'category' => 'téléphonie'],
            ['serial_number' => 'SN015', 'name' => 'Toshiba Satellite Pro 2007', 'year' => '2007', 'category' => 'ordinateur'],
            ['serial_number' => 'SN016', 'name' => 'iPod nano 3', 'year' => '2007', 'category' => 'multimédia'],
            ['serial_number' => 'SN017', 'name' => 'iPad 4', 'year' => '2012', 'category' => 'téléphonie'],
            ['serial_number' => 'SN018', 'name' => 'iPad 2', 'year' => '2011', 'category' => 'téléphonie'],*/
        ];

        DB::table('devices')->insert($devices);
    }
}
