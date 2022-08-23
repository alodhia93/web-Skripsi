<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->string('diterimaBulanStlhLulus');
            $table->string('nim');
            $table->string('nama');
            $table->string('jenisKelamin');
            $table->string('ipk');
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
        Schema::dropIfExists('training');
    }
}
