<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'dataMahasiswa';
    
    protected $primaryKey = 'nim_mahasiswa';

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';



    protected $fillable = [
        'prodi',
        'nim_mahasiswa', 
        'nama_mahasiswa',
        'Jenis_Kelamin',
        'LakiLaki',
        'Perempuan',
        'Pengetahuan_di_bidang_atau_disiplin_ilmu', 
        'Pengetahuan_di_luar_bidang_atau_disiplin_ilmu', 
        'Pengetahuan_umum',  
        'Berpikir_kritis',
        'predikat_IPK',
        'predikat_IPK_Dengan_Pujian',
        'predikat_IPK_Sangat_Memuaskan',
        'predikat_IPK_Memuaskan'
    ];

}
