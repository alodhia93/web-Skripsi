<?php

namespace App\Imports;

use App\Training;
use Maatwebsite\Excel\Concerns\ToModel;

class TrainingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Training([
            'diterimaBulanStlhLulus' => $row[0],
            'nim' => $row[1], 
            'nama' => $row[2],
            'jenisKelamin' => $row[3],
            'ipk' => $row[4],
            'fakultas' => $row[5], 
            'kemampuanBahasaInggris' => $row[6], 
            'pengetahuanDiluarBidang' => $row[7],  
            'keterampilanKomputer' => $row[8],
            'pengalamanMagang' => $row[9], 
            'jenisPekerjaan'  => $row[10]
        ]);
    }
}
