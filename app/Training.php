<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = "training";

    protected $primaryKey = 'nim';

    protected $fillable = [
        'prodi',
        'nim_mahasiswa', 
        'nama_mahasiswa',
        'Jenis_Kelamin',
        'ipk',
        'Pengetahuan_di_bidang_atau_disiplin_ilmu', 
        'Pengetahuan_di_luar_bidang_atau_disiplin_ilmu', 
        'Pengetahuan_umum',  
        'Berpikir_kritis',
        'predikat_IPK'];

}
    