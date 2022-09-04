<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = "training";

    protected $primaryKey = 'nim';

    protected $fillable = [
        'diterimaBulanStlhLulus',
        'nim', 
        'nama',
        'jenisKelamin',
        'ipkPredikat',
        'fakultas', 
        'kemampuanBahasaInggris', 
        'pengetahuanDiluarBidang',  
        'keterampilanKomputer',
        'pengalamanMagang', 
        'jenisPekerjaan'];

}
    