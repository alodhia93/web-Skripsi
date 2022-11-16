<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDataTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataTraining', function (Blueprint $table) {
            $table->string('prodi');
            $table->string('nim_mahasiswa');
            $table->string('nama_mahasiswa');
            $table->string('Jenis_Kelamin');
            $table->integer('LakiLaki');
            $table->integer('Perempuan');
            $table->integer('Pengetahuan_di_bidang_atau_disiplin_ilmu');
            $table->integer('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu');
            $table->integer('Pengetahuan_umum');
            $table->integer('Berpikir_kritis');
            $table->string('predikat_IPK');
            $table->integer('predikat_IPK_Dengan_Pujian');
            $table->integer('predikat_IPK_Sangat_Memuaskan');
            $table->integer('predikat_IPK_Memuaskan');
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
        Schema::dropIfExists('dataTraining');
    }
}
