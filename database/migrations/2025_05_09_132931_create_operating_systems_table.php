<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('operating_systems', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('version');
            $table->string('build');
            $table->string('architecture');
        });

        DB::table('operating_systems')->insert([
            ['brand' => 'Windows', 'version' => '11 24h2', 'build' => 'KB5043178', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 22h2', 'build' => 'KB5028254', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 21h2', 'build' => 'KB5018483', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 20h2', 'build' => 'KB5018483', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1909', 'build' => 'KB5018483', 'architecture' => 'x86_64'],
            ['brand' => 'Windows', 'version' => '10 1903', 'build' => '18362.1256', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '15.4.1', 'build' => '24E263', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '14.6', 'build' => '24E263', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '13.6', 'build' => '22G90', 'architecture' => 'x86_64'],
            ['brand' => 'macOS', 'version' => '12.6.1', 'build' => '21G217', 'architecture' => 'x86_64'],
        ]);
    }

    public function down(): void {
        Schema::dropIfExists('operating_systems');
    }
};
