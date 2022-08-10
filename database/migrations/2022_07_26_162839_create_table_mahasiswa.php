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
            $table->string('nama');
            $table->string('nim');
            $table->float('ipk',8,2);
            $table->integer('masaStudiBulan');
            $table->integer('masaStudiTahun');
            $table->string('fakultas');
            $table->string('kemampuanBIng');
            $table->string('pengalamanMagang');
            $table->string('jenisPekerjaanPertama');
            $table->string('hubStudidgnPekerjaan');
            $table->boolean('ikutOrganisasi');
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
