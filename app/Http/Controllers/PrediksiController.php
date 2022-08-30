<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use App\Mahasiswa;
use App\User;

class PrediksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = 'prediksi'; 

        $mahasiswa = Mahasiswa::firstWhere('nim',Session::get('nim'));
        
        if (!$mahasiswa) {
            create();
        }

        $client = Http::withBasicAuth('admin','94k0z4007')->get('http://desktop-qo1l6ph:8080/api/rest/process/procTrain?nim='. $mahasiswa->nim)->json();
        
        $prediksi = $client[0]['prediction(diterimaBulanStlhLulus)'];

        return view('prediksi.index', compact('mahasiswa','prediksi','halaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halaman = 'prediksi';

        $mahasiswa = User::firstWhere('nim',Session::get('nim'));

        return view('prediksi.create', compact('halaman','mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $halaman = 'mahasiswa';
        if ($request->ipk <= 2.75) {
            $request->merge(['ipkPredikat' => 'Memuaskan']);
        } elseif ($request->ipk <= 3.5) {
            $request->merge(['ipkPredikat' => 'Sangat Memuaskan']);
        } else {
            $request->merge(['ipkPredikat' => 'Pujian']);
            //$request->ipkPredikat = "Pujian";
        }

        $validator = Validator::make($request->all(),[
            'ipk'   =>  'required|numeric|between:1,4.00',
            'kemampuanBahasaInggris'    =>  'required',
            'pengetahuanDiluarBidang'   =>  'required',
            'keterampilanKomputer'      =>  'required',
            'pengalamanMagang'          =>  'required',
            'jenisPekerjaan'            =>  'required',
        ]);

        if($validator->fails()){
            return redirect('mahasiswa/create')
                ->withInput()
                ->withErrors($validator);
        }
        
        Mahasiswa::Create($request->all());

        return redirect('prediksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $halaman = 'mahasiswa'; 

        $mahasiswa = Mahasiswa::firstWhere('nim',Session::get('nim'));
        
        return view('mahasiswa.edit', compact('mahasiswa','halaman','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Mahasiswa $mahasiswa, $request)
    {
        if ($request->ipk <= 2.75) {
            $request->merge(['ipkPredikat' => 'Memuaskan']);
        } elseif ($request->ipk <= 3.5) {
            $request->merge(['ipkPredikat' => 'Sangat Memuaskan']);
        } else {
            $request->merge(['ipkPredikat' => 'Pujian']);
            //$request->ipkPredikat = "Pujian";
        }

        $validator = Validator::make($request->all(),[
            'ipk'   =>  'required|numeric|between:1,4.00',
            'kemampuanBahasaInggris'    =>  'required',
            'pengetahuanDiluarBidang'   =>  'required',
            'keterampilanKomputer'      =>  'required',
            'pengalamanMagang'          =>  'required',
            'jenisPekerjaan'            =>  'required',
        ]);

        if($validator->fails()){
            return redirect('mahasiswa/edit')
                ->withInput()
                ->withErrors($validator);
        }

        $mahasiswa->update($request->all());
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
