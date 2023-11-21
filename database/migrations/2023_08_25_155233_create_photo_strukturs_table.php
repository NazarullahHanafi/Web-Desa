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
        Schema::create('photo_strukturs', function (Blueprint $table) {
            $table->id();
            $table->string('photo_struktur')->nullable;
            $table->string('post_date')->nullable;
            $table->string('jabatan')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_strukturs');
    }
};
