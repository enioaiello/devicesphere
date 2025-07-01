<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemorySeeder extends Seeder
{
    public function run(): void
    {
        $memory = [
            ['category' => 'SDRAM', 'type' => 'DDR3', 'capacity' => 8192, 'speed' => 1600, 'form_factor' => 'SO-DIMM', 'voltage' => null, 'year' => 2012],
            ['category' => 'SDRAM', 'type' => 'DDR3', 'capacity' => 12288, 'speed' => 1333, 'form_factor' => 'DIMM', 'voltage' => null, 'year' => 2011],
            ['category' => 'SDRAM', 'type' => 'DDR3', 'capacity' => 4096, 'speed' => 1066, 'form_factor' => 'SO-DIMM', 'voltage' => null, 'year' => 2010],
            ['category' => 'SDRAM', 'type' => 'DDR4', 'capacity' => 4096, 'speed' => 2400, 'form_factor' => 'SO-DIMM', 'voltage' => null, 'year' => 2020],
            ['category' => 'SDRAM', 'type' => 'DDR2', 'capacity' => 2048, 'speed' => 800, 'form_factor' => 'SO-DIMM', 'voltage' => null, 'year' => 2007],
            ['category' => 'SDRAM', 'type' => 'DDR3', 'capacity' => 8192, 'speed' => 2133, 'form_factor' => 'DIMM', 'voltage' => null, 'year' => 2016],
            ['category' => 'SDRAM', 'type' => 'DDR2', 'capacity' => 1024, 'speed' => 1066, 'form_factor' => 'UDIMM', 'voltage' => null, 'year' => 2012], // iPad 4
            ['category' => 'SDRAM', 'type' => 'DDR2', 'capacity' => 512, 'speed' => 800, 'form_factor' => 'UDIMM', 'voltage' => null, 'year' => 2011], // iPad 2
            ['category' => 'SRAM', 'type' => 'DDR1', 'capacity' => 64, 'speed' => 0, 'form_factor' => 'UDIMM', 'voltage' => null, 'year' => 2007], // iPod nano 3
        ];

        DB::table('memory')->insert($memory);
    }
}
