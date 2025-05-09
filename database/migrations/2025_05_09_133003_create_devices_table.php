<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->string('name');
            $table->string('model');
            $table->string('brand');
            $table->string('year');
            $table->enum('category', ['téléphonie', 'ordinateur', 'domotique', 'jeux vidéo', 'multimédia']);
            $table->foreignId('operating_system_id')->nullable()->constrained('operating_systems')->nullOnDelete();
            $table->string('image_path');
            $table->text('description');
            $table->text('notes');
            $table->string('processor');
            $table->string('ram');
            $table->string('storage');
            $table->date('purchase_date');
            $table->date('added_date');
            $table->date('separation_date')->nullable();
            $table->enum('separation_type', ['vente', 'donation', 'décharge', 'autre'])->nullable();
            $table->boolean('is_archived')->default(false);
        });
    }

    public function down(): void {
        Schema::dropIfExists('devices');
    }
};
