<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faces', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('unit_id'); // Ganti dengan jenis data yang sesuai
            $table->bigInteger('location_id'); // Ganti dengan jenis data yang sesuai
            $table->varchar('merk'); // Ganti dengan jenis data yang sesuai
            $table->varchar('type'); // Ganti dengan jenis data yang sesuai
            $table->varchar('firmware'); // Ganti dengan jenis data yang sesuai
            $table->varchar('localip'); // Ganti dengan jenis data yang sesuai
            $table->varchar('condition'); // Ganti dengan jenis data yang sesuai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faces');
    }
};
