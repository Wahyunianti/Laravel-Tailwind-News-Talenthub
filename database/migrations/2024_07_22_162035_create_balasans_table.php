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
        Schema::create('balasans', function (Blueprint $table) {
            $table->id();
            $table->string('balasan');
            $table->string('nama');
            $table->unsignedBigInteger('komentars_id');
            $table->foreign('komentars_id')->references('id')->on('komentars')->cascadeOnDelete()->cascadeOnUpdate();     
            $table->unsignedBigInteger('artikels_id');
            $table->foreign('artikels_id')->references('id')->on('artikels')->cascadeOnDelete()->cascadeOnUpdate();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balasans');
    }
};
