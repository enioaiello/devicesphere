<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('brands')->insert([
            ['name' => 'Google'],
            ['name' => 'Amazon'],
            ['name' => 'Samsung'],
            ['name' => 'Apple'],
            ['name' => 'Xiaomi'],
            ['name' => 'Microsoft'],
            ['name' => 'Nokia'],
            ['name' => 'Sony'],
            ['name' => 'Huawei'],
            ['name' => 'LG'],
            ['name' => 'Motorola'],
            ['name' => 'Lenovo'],
            ['name' => 'Dell'],
            ['name' => 'HP'],
            ['name' => 'Asus'],
            ['name' => 'Acer'],
            ['name' => 'OnePlus'],
            ['name' => 'Oppo'],
            ['name' => 'Realme'],
            ['name' => 'Vivo'],
            ['name' => 'TCL'],
            ['name' => 'ZTE'],
            ['name' => 'Honor'],
            ['name' => 'BlackBerry'],
            ['name' => 'Panasonic'],
            ['name' => 'Philips'],
            ['name' => 'Roku'],
            ['name' => 'Nintendo'],
            ['name' => 'Sega'],
            ['name' => 'Atari'],
            ['name' => 'Logitech'],
            ['name' => 'Bang & Olufsen'],
            ['name' => 'Bose'],
            ['name' => 'Sonos'],
            ['name' => 'Arlo'],
            ['name' => 'Ring'],
            ['name' => 'Netatmo'],
            ['name' => 'Withings'],
            ['name' => 'Fitbit'],
            ['name' => 'Garmin'],
            ['name' => 'Spotify'],
            ['name' => 'Dyson']
        ]);
    }

    public function down(): void
    {
        //
    }
};
