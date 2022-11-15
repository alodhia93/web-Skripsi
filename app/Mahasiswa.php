<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    
    protected $primaryKey = 'nim_mahasiswa';

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'nim_mahasiswa';
    }

    public function getNamaAttribute($nama)
    {
        return ucwords($nama);
    }

    public function setNamaAttribute($nama)
    {
        $this->attributes['nama_mahasiswa'] = strtolower($nama);
    }

    public function setIpkAttribute($ipk)
    {
        $this->attributes['ipk'] = str_replace(',', '.', $ipk);
    }

    protected $fillable = [
        'nim_mahasiswa', 
        'nama_mahasiswa',
        'Jenis_Kelamin',
        'ipk',
        'prodi',
        'Pengetahuan_di_bidang_atau_disiplin_ilmu', 
        'Pengetahuan_di_luar_bidang_atau_disiplin_ilmu', 
        'Pengetahuan_umum',  
        'Berpikir_kritis',
        'predikat_IPK',
        'prediksi',
    ];

}
