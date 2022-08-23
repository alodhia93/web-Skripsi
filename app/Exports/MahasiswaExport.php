<?php

namespace App\Exports;

use App\Mahasiswa;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaExport implements FromView, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $mahasiswa = Mahasiswa::all();
        $prediksi = array();

        foreach($mahasiswa as $ms){
            $client = Http::withBasicAuth('admin','94k0z4007')->get('http://desktop-qo1l6ph:8080/api/rest/process/procTrain?nim='. $ms->nim)->json();
            $prediksi[] = $client[0]['prediction(diterimaBulanStlhLulus)'];
        }
        return view('mahasiswa/export', 
            compact(['mahasiswa','prediksi']));
        //return Mahasiswa::all();
    }

    public function headings(): array
    {
        return [
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
            'jenisPekerjaan'
        ];
    }
}
