<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Enio', 'email' => 'aielloenio@icloud.com', 'password' => '1234567890', 'role' => 'admin', 'write_speed' => 500, 'form_factor' => '2.5"', 'interface' => 'SATA', 'year' => 2012],
        ];

        DB::table('users')->insert($users);
    }
}
