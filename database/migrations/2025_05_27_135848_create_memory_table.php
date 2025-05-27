<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('memory', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('manufacturer');
            $table->enum('category', ['SDRAM', 'SRAM', 'DRAM', 'FPM DRAM', 'EDO RAM', 'RDRAM', 'VRAM', 'MRAM', 'FRAM', 'NVRAM'])->default('SDRAM');
            $table->enum('type', ['DDR1', 'DDR2', 'DDR3', 'DDR4', 'DDR5', 'LPDDR2', 'LPDDR3', 'LPDDR4', 'LPDDR5'])->default('DDR1');
            $table->integer('capacity');
            $table->integer('speed');
            $table->string('form_factor');
            $table->string('voltage')->nullable();
            $table->integer('year')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('memory');
    }
};
