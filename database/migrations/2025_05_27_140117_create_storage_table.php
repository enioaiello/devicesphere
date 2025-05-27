<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('storage', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('manufacturer');
            $table->enum('type', ['HDD', 'SSD', 'NVMe', 'Hybrid'])->default('HDD');
            $table->integer('capacity');
            $table->integer('read_speed')->nullable();
            $table->integer('write_speed')->nullable();
            $table->enum('form_factor', ['2.5"', '3.5"', 'M.2', 'PCIe'])->default('2.5"');
            $table->enum('interface', ['SATA', 'PCIe'])->nullable();
            $table->integer('year')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('storage');
    }
};
