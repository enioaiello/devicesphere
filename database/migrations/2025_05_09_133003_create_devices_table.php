<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->foreignId('user')->nullable()->constrained('users')->nullOnDelete();
            $table->string('name');
            $table->string('year');
            $table->enum('category', ['téléphonie', 'ordinateur', 'domotique', 'jeux vidéo', 'multimédia', 'serveur']);
            $table->string('image_path')->nullable();
            $table->text('description')->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('added_date')->useCurrent();
            $table->date('separation_date')->nullable();
            $table->enum('separation_type', ['vente', 'donation', 'décharge', 'autre'])->nullable();
            $table->boolean('is_archived')->default(false);
        });
    }

    public function down(): void {
        Schema::dropIfExists('devices');
    }
};
