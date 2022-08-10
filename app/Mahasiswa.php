<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    
    //private $primaryKey = 'nim';
    
    public $incrementing = false;

    protected $fillable = [
        'nama',
        'nim',
        'ipk',
        'masaStudiBulan',
        'masaStudiTahun',
        'fakultas',
        'kemampuanBIng',
        'pengalamanMagang',
        'jenisPekerjaanPertama',
        'hubStudidgnPekerjaan',
        'ikutOrganisasi',
    ];
}
