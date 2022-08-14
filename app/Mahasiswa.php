<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    
    protected $primaryKey = 'nim';

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'nim';
    }

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
