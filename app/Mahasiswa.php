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

    public function getNamaAttribute($nama)
    {
        return ucwords($nama);
    }

    public function setNamaAttribute($nama)
    {
        $this->attributes['nama'] = strtolower($nama);
    }

    public function setIpkAttribute($ipk)
    {
        $this->attributes['ipk'] = str_replace(',', '.', $ipk);
    }

    protected $fillable = [
        'nim', 
        'nama',
        'jenisKelamin',
        'ipk',
        'ipkPredikat',
        'fakultas', 
        'kemampuanBahasaInggris', 
        'pengetahuanDiluarBidang',  
        'keterampilanKomputer',
        'pengalamanMagang', 
        'jenisPekerjaan',
        'prediksi',
    ];

}
