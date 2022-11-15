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
            $table->string('ipk');
            $table->string('Pengetahuan_di_bidang_atau_disiplin_ilmu');
            $table->string('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu');
            $table->string('Pengetahuan_umum');
            $table->string('Berpikir_kritis');
            $table->string('predikat_IPK');
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
