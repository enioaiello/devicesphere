<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('failures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['matériel', 'logiciel']);
            $table->text('description');
            $table->decimal('estimated_cost', 10, 2)->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('failures');
    }
};
