<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('processor', function (Blueprint $table) {
            $table->foreignId('manufacturer')->nullable()->constrained('brands')->nullOnDelete();
        });

        Schema::table('graphics_card', function (Blueprint $table) {
            $table->foreignId('manufacturer')->nullable()->constrained('brands')->nullOnDelete();
        });

        Schema::table('storage', function (Blueprint $table) {
            $table->foreignId('manufacturer')->nullable()->constrained('brands')->nullOnDelete();
        });

        Schema::table('memory', function (Blueprint $table) {
            $table->foreignId('manufacturer')->nullable()->constrained('brands')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('components', function (Blueprint $table) {
            //
        });
    }
};
