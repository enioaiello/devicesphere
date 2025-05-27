<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graphics_card', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('manufacturer');
            $table->integer('memory_size');
            $table->enum('memory_type', ['GDDR6', 'GDDR5', 'GDDR4', 'GDDR3', 'HBM2', 'HBM'])->default('GDDR6');
            $table->integer('core_clock')->nullable(); // in MHz
            $table->integer('boost_clock')->nullable(); // in MHz
            $table->year('year')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graphics_card');
    }
};
