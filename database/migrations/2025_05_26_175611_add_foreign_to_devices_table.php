<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('devices', function (Blueprint $table) {
            $table->foreignId('model_id')->nullable()->constrained('models')->nullOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained('brands')->nullOnDelete();
        });
    }

    public function down(): void {
        Schema::table('devices', function (Blueprint $table) {
            $table->dropForeign(['model_id']);
            $table->dropForeign(['brand_id']);
        });
    }
};
