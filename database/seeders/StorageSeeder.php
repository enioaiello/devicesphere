<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    public function run(): void
    {
        $storages = [
            /*['name' => '', 'type' => 'HDD', 'capacity' => 500, 'interface' => 'SATA', 'year' => 2012],
            ['name' => '', 'type' => 'HDD', 'capacity' => 1000, 'interface' => 'SATA', 'year' => 2011],
            ['name' => '', 'type' => 'HDD', 'capacity' => 250, 'interface' => 'SATA', 'year' => 2010],
            ['name' => '', 'type' => 'eMMC', 'capacity' => 64, 'interface' => 'eMMC', 'year' => 2020],
            ['name' => '', 'type' => 'HDD', 'capacity' => 120, 'interface' => 'SATA', 'year' => 2007],
            ['name' => '', 'type' => 'HDD', 'capacity' => 500, 'interface' => 'SATA', 'year' => 2016],
            ['name' => '', 'type' => 'Flash', 'capacity' => 4, 'interface' => 'Internal', 'year' => 2007],
            ['name' => '', 'type' => 'Flash', 'capacity' => 16, 'interface' => 'Internal', 'year' => 2012],
            ['name' => '', 'type' => 'Flash', 'capacity' => 16, 'interface' => 'Internal', 'year' => 2011],*/
            ['name' => 'MX500', 'type' => 'SSD', 'capacity' => 500, 'read_speed' => 500, 'write_speed' => 500, 'form_factor' => '2.5"', 'interface' => 'SATA', 'year' => 2012],
        ];

        DB::table('storage')->insert($storages);
    }
}
