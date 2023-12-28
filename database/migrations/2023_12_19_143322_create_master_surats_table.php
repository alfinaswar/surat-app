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
        Schema::create('master_surats', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat', 255); 
            $table->string('klasifikasi', 100)->nullable(); 
            $table->string('lampiran', 100)->nullable(); 
            $table->string('perihal', 255)->nullable(); 
            $table->string('id_polisi', 20)->nullable(); 
            $table->string('pangkat', 50)->nullable(); 
            $table->string('nrp', 20)->nullable(); 
            $table->string('jabatan', 50)->nullable(); 
            $table->text('keterangan')->nullable(); 
            $table->date('tanggal')->nullable(); 
            $table->string('provinsi', 50)->nullable(); 
            $table->string('kota', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('ttd1', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_surats');
    }
};
