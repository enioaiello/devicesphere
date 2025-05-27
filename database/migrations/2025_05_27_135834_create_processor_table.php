<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('processor', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('manufacturer');
            $table->string('architecture');
            $table->integer('cores')->nullable();
            $table->integer('threads')->nullable();
            $table->decimal('base_clock', 5, 2)->nullable();
            $table->decimal('boost_clock', 5, 2)->nullable();
            $table->string('socket')->nullable();
            $table->integer('year')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('processor');
    }
};
