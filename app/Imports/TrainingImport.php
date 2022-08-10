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
            'nim' => $row[1],
            'ipk' => $row[2],
            'diterimaBulanStlhLulus' => $row[0],
            'masaStudiBulan' => $row[3],
            'masaStudiTahun' => $row[4],
            'fakultas' => $row[5],
            'kemampuanBIng' => $row[6],
            'pengalamanMagang' => $row[7],
            'jenisPekerjaanPertama' => $row[8],
            'hubStudidgnPekerjaan' => $row[9],
            'ikutOrganisasi' => $row[10],
        ]);
    }
}
