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
            $table->string('prodi');
            $table->string('nim_mahasiswa')->unique();
            $table->string('nama_mahasiswa');
            $table->string('Jenis_Kelamin');
            $table->integer('LakiLaki');
            $table->integer('Perempuan');
            $table->integer('Pengetahuan_di_bidang_atau_disiplin_ilmu');
            $table->integer('Pengetahuan_di_luar_bidang_atau_disiplin_ilmu');
            $table->integer('Pengetahuan_umum');
            $table->integer('Berpikir_kritis');
            $table->string('predikat_IPK')->nullable();
            $table->integer('predikat_IPK_Dengan_Pujian')->nullable();
            $table->integer('predikat_IPK_Sangat_Memuaskan')->nullable();
            $table->integer('predikat_IPK_Memuaskan')->nullable();
            $table->timestamps();

            $table->foreign('nim_mahasiswa')
                  ->references('nim')->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
