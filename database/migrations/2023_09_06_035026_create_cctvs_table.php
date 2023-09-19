<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cctvs', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('ip');
            $table->string('merk');
            $table->string('type');
            $table->string('view_area');
            $table->string('condition');
            $table->string('gambar')->nullable();
            $table->timestamps();

            // Definisikan kunci asing untuk hubungan dengan tabel NVR
            $table->foreign('nvr_id')->references('id')->on('nvrs')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cctvs');
    }
};
