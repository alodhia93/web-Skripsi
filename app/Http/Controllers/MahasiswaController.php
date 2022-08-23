<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //public $halaman = 'mahasiswa';

    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        $halaman = 'mahasiswa';
        //return view('mahasiswa.index', compact('mahasiswa','halaman'));

        $prediksi = array();

        foreach($mahasiswa as $ms){
            $client = Http::withBasicAuth('admin','94k0z4007')->get('http://desktop-qo1l6ph:8080/api/rest/process/procTrain?nim='. $ms->nim)->json();
            $prediksi[] = $client[0]['prediction(diterimaBulanStlhLulus)'];
        }
        //$client = Http::withBasicAuth('admin','94k0z4007')->get('http://desktop-qo1l6ph:8080/api/rest/process/procTrainList?')->json();
        
        //$prediksi = $client[0]['prediction(diterimaBulanStlhLulus)'];
        //echo $prediksi;
        return view('mahasiswa.index', compact(['mahasiswa','halaman','prediksi']));
    }

    public function export() 
    {
        return Excel::download(new MahasiswaExport, 'prediksiMasaTungguKerja.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halaman = 'mahasiswa';
        return view('mahasiswa.create', compact('halaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ipk <= 2.75) {
            $request->merge(['ipkPredikat' => 'Memuaskan']);
        } elseif ($request->ipk <= 3.5) {
            $request->merge(['ipkPredikat' => 'Sangat Memuaskan']);
        } else {
            $request->merge(['ipkPredikat' => 'Pujian']);
            //$request->ipkPredikat = "Pujian";
        }
        
        Mahasiswa::Create($request->all());

        return redirect('mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        $halaman = 'mahasiswa'; 

        $client = Http::withBasicAuth('admin','94k0z4007')->get('http://desktop-qo1l6ph:8080/api/rest/process/procTrain?nim='. $mahasiswa->nim)->json();
        
        $prediksi = $client[0]['prediction(diterimaBulanStlhLulus)'];

        return view('mahasiswa.show', compact('mahasiswa','prediksi','halaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}
