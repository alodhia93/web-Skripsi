<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDataMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataMahasiswa', function (Blueprint $table) {
            $table->string('nim_mahasiswa')->unique();
            $table->string('nama_mahasiswa');
            $table->string('Jenis_Kelamin');
            $table->float('ipk',8,2);
            $table->string('prodi');
            $table->string('Pengetahuan_di_bidang_atau_disiplin_ilmu');
            $table->string('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu');
            $table->string('Pengetahuan_umum');
            $table->string('Berpikir_kritis');
            $table->string('predikat_IPK');
            $table->string('prediksi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataMahasiswa');
    }
}
