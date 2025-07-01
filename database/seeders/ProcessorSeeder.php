<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessorSeeder extends Seeder
{
    public function run(): void
    {
        $processors = [
            ['name' => 'Core i5 3rd Gen', 'architecture' => 'x86_64', 'cores' => 2, 'threads' => 4, 'base_clock' => 2.5, 'boost_clock' => 3.1, 'socket' => 'LGA1155', 'year' => 2012, 'manufacturer' => 31], // Intel
            ['name' => 'Core i5 2nd Gen', 'architecture' => 'x86_64', 'cores' => 4, 'threads' => 4, 'base_clock' => 2.7, 'boost_clock' => 3.2, 'socket' => 'LGA1155', 'year' => 2011, 'manufacturer' => 31],
            ['name' => 'Core 2 Duo', 'architecture' => 'x86_64', 'cores' => 2, 'threads' => 2, 'base_clock' => 2.4, 'boost_clock' => null, 'socket' => 'LGA775', 'year' => 2010, 'manufacturer' => 31],
            ['name' => 'A15 Bionic', 'architecture' => 'ARM64', 'cores' => 6, 'threads' => 6, 'base_clock' => 3.23, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2022, 'manufacturer' => 4], // Apple
            ['name' => 'A9', 'architecture' => 'ARM64', 'cores' => 2, 'threads' => 2, 'base_clock' => 1.85, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2015, 'manufacturer' => 4],
            ['name' => 'Exynos 7884', 'architecture' => 'ARM64', 'cores' => 8, 'threads' => 8, 'base_clock' => 1.6, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2019, 'manufacturer' => 3], // Samsung
            ['name' => 'Kirin 620', 'architecture' => 'ARM64', 'cores' => 8, 'threads' => 8, 'base_clock' => 1.2, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2015, 'manufacturer' => 9], // Huawei
            ['name' => 'Celeron N4020', 'architecture' => 'x86_64', 'cores' => 2, 'threads' => 2, 'base_clock' => 1.1, 'boost_clock' => 2.8, 'socket' => 'BGA', 'year' => 2020, 'manufacturer' => 31],
            ['name' => 'PowerPC G3', 'architecture' => 'PowerPC', 'cores' => 1, 'threads' => 1, 'base_clock' => 0.4, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 1999, 'manufacturer' => 111], // IBM
            ['name' => 'ARM11 Dual Core', 'architecture' => 'ARMv6', 'cores' => 2, 'threads' => 2, 'base_clock' => 0.3, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2011, 'manufacturer' => 110], // ARM
            ['name' => 'PowerPC Gekko', 'architecture' => 'PowerPC', 'cores' => 1, 'threads' => 1, 'base_clock' => 0.485, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2001, 'manufacturer' => 111],
            ['name' => 'Jaguar Octa-core', 'architecture' => 'x86_64', 'cores' => 8, 'threads' => 8, 'base_clock' => 1.75, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2016, 'manufacturer' => 32], // AMD
            ['name' => 'S5', 'architecture' => 'ARM64', 'cores' => 2, 'threads' => 2, 'base_clock' => 1.6, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2019, 'manufacturer' => 4],
            ['name' => 'ARM11', 'architecture' => 'ARMv6', 'cores' => 1, 'threads' => 1, 'base_clock' => 0.3, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2007, 'manufacturer' => 112], // Freescale
            ['name' => 'A6X', 'architecture' => 'ARMv7', 'cores' => 2, 'threads' => 2, 'base_clock' => 1.4, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2012, 'manufacturer' => 4],
            ['name' => 'A5', 'architecture' => 'ARMv7', 'cores' => 2, 'threads' => 2, 'base_clock' => 1.0, 'boost_clock' => null, 'socket' => 'BGA', 'year' => 2011, 'manufacturer' => 4],
        ];

        DB::table('processor')->insert($processors);
    }
}
