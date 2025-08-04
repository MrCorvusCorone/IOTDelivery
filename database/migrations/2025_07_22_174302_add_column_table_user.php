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
        Schema::table('users', function (Blueprint $table) {
            
            // Attribut yang ditambahkan
            $table->boolean('enable_status')->default(true);
            $table->date('date_lahir')->nullable();
            $table->string('kota_lahir')->nullable();
            $table->string('telepon')->nullable();
            $table->string('photo')->nullable();

            $table->string('alm_jln_asal')->nullable();
            $table->string('alm_jln_domisili')->nullable();

            // Foreign Key
            $table->string('alm_prov_asal')->default('0')->nullable();
            $table->foreign('alm_prov_asal')->references('id')->on('provinsi');

            $table->string('alm_kota_asal')->default('0')->nullable();
            $table->foreign('alm_kota_asal')->references('id')->on('kota');

            $table->string('alm_kec_asal')->default('0')->nullable();
            $table->foreign('alm_kec_asal')->references('id')->on('kecamatan');

            $table->string('alm_kel_asal')->default('0')->nullable();
            $table->foreign('alm_kel_asal')->references('id')->on('kelurahan');

            $table->string('alm_prov_domisili')->default('0')->nullable();
            $table->foreign('alm_prov_domisili')->references('id')->on('provinsi');

            $table->string('alm_kota_domisili')->default('0')->nullable();
            $table->foreign('alm_kota_domisili')->references('id')->on('kota');

            $table->string('alm_kec_domisili')->default('0')->nullable();
            $table->foreign('alm_kec_domisili')->references('id')->on('kecamatan');

            $table->string('alm_kel_domisili')->default('0')->nullable();
            $table->foreign('alm_kel_domisili')->references('id')->on('kelurahan');

            $table->foreignId('user_role_id')->references('id')->on('user_roles'); // nilai default didefinisikan di model User
            // $table->foreignId('user_role_id')->nullable()->constrained('user_roles')->nullOnDelete(); // nilai default didefinisikan di model User
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
            Schema::dropIfExists('password_reset_tokens');
            Schema::dropIfExists('sessions');
        });
    }
};
