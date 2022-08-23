<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            //$table->id()->increment();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('jenisKelamin');
            $table->float('ipk',8,2);
            $table->string('ipkPredikat');
            $table->string('fakultas');
            $table->string('kemampuanBahasaInggris');
            $table->string('pengetahuanDiluarBidang');
            $table->string('keterampilanKomputer');
            $table->string('pengalamanMagang');
            $table->string('jenisPekerjaan');
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
        Schema::dropIfExists('mahasiswa');
    }
}
