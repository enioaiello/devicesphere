<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // Composants matériels
            ProcessorSeeder::class,
            MemorySeeder::class,
            GraphicsCardSeeder::class,
            StorageSeeder::class,

            // Appareils
            DeviceSeeder::class,
        ]);
    }
}
