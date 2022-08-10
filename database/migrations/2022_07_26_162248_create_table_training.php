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
            $table->string('nim')->unique;
            $table->float('ipk');
            $table->integer('diterimaBulanStlhLulus');
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
        Schema::dropIfExists('training');
    }
}
