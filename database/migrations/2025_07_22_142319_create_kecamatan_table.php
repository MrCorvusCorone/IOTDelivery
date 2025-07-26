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
        Schema::create('kecamatan', function (Blueprint $table) {
            // $table->id();
            $table->string('id')->primary(); // Primary Key
            $table->timestamps();

            $table->boolean('enable_status')->default(true);
            $table->string('name')->nullable();

            // Foreign Key
            $table->string('kota_id');
            $table->foreign('kota_id')->references('id')->on('kota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecamatan');
    }
};
