<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraphicsCardSeeder extends Seeder
{
    public function run(): void
    {
        $graphics = [
            ['manufacturer' => 31, 'name' => 'HD Graphics 4000', 'memory_size' => 0, 'memory_type' => 'GDDR6', 'year' => 2012],
            ['manufacturer' => 32, 'name' => 'Radeon HD 6750M', 'memory_size' => 512, 'memory_type' => 'GDDR6', 'year' => 2011],
            ['manufacturer' => 33, 'name' => 'GeForce 320M', 'memory_size' => 256, 'memory_type' => 'GDDR6', 'year' => 2010],
            ['manufacturer' => 31, 'name' => 'UHD Graphics 600', 'memory_size' => 0, 'memory_type' => 'GDDR6', 'year' => 2020],
            ['manufacturer' => 129, 'name' => 'Rage 128 Pro', 'memory_size' => 16, 'memory_type' => 'GDDR6', 'year' => 1999],
            ['manufacturer' => 32, 'name' => 'Radeon GCN', 'memory_size' => 2048, 'memory_type' => 'GDDR6', 'year' => 2016],
            ['manufacturer' => 122, 'name' => 'SGX554MP4', 'memory_size' => 0, 'memory_type' => 'GDDR6', 'year' => 2012],
            ['manufacturer' => 122, 'name' => 'SGX543MP2', 'memory_size' => 0, 'memory_type' => 'GDDR6', 'year' => 2011],
        ];

        DB::table('graphics_card')->insert($graphics);
    }
}
