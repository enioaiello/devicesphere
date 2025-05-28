<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('devices', function (Blueprint $table) {
            $table->foreignId('model')->nullable()->constrained('models')->nullOnDelete();
            $table->foreignId('brand')->nullable()->constrained('brands')->nullOnDelete();
            $table->foreignId('operating_system')->nullable()->constrained('operating_systems')->nullOnDelete();
            $table->foreignId('storage')->nullable()->constrained('storage')->nullOnDelete();
            $table->foreignId('memory')->nullable()->constrained('memory')->nullOnDelete();
            $table->foreignId('processor')->nullable()->constrained('processor')->nullOnDelete();
            $table->foreignId('graphics_card')->nullable()->constrained('graphics_card')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('devices', function (Blueprint $table) {
            $table->dropForeign(['model']);
            $table->dropForeign(['brand']);
            $table->dropForeign(['operating_system']);
            $table->dropForeign(['storage']);
            $table->dropForeign(['memory']);
            $table->dropForeign(['processor']);
            $table->dropForeign(['graphics_card']);
        });
    }
};
