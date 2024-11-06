<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id('no_polisi'); // Pastikan ini adalah BIGINT
            $table->string('jenis_kendaraan');
            $table->string('warna')->nullable();
            $table->string('tahun_produksi')->nullable();
            $table->string('kode_mesin')->nullable();
            $table->foreignId('id_pelanggan')->constrained('pelanggans', 'id_pelanggan'); // Referencing the right column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}