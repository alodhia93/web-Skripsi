<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;    
use Validator;
use App\Mahasiswa;
use App\User;
use Auth;
use Illuminate\Support\Facades\Http;

class PrediksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('mahasiswa');
    }
    public function index()
    {
        $halaman = 'prediksi'; 

        $mahasiswa = Mahasiswa::firstWhere('nim_mahasiswa',Auth::user()->nim);
        
        
        if (!$mahasiswa) {
            return $this->create();
        }

        return view('prediksi.index', compact('mahasiswa','halaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halaman = 'prediksi';

        $mahasiswa = User::where('nim',Auth::user()->nim)->first();

        if($mahasiswa->Jenis_Kelamin == "LakiLaki"){
            $LakiLaki = 1;
            $Perempuan = 0;
        }else{
            $LakiLaki = 0;
            $Perempuan = 1;
        }

        return view('prediksi.create', compact('halaman','mahasiswa','LakiLaki','Perempuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$halaman = 'mahasiswa';

        //$request->ipk = str_replace(',', '.', $request->ipk);
        

        $validator = Validator::make($request->all(),[
            'Pengetahuan_di_bidang_atau_disiplin_ilmu'    =>  'required',
            'Pengetahuan_di_luar_bidang_atau_disiplin_ilmu'   =>  'required',
            'Pengetahuan_umum'      =>  'required',
            'Berpikir_kritis'          =>  'required',
        ]);

        if($validator->fails()){
            return redirect('prediksi/create')
                ->withInput()
                ->withErrors($validator);
        }
        print_r($request->all());
        //return;
        Mahasiswa::Create($request->all());

        $mahasiswa = Mahasiswa::firstWhere('nim_mahasiswa',Auth::user()->nim);

        $client = Http::withBasicAuth('admin','tioganteng')->get('http://Alodhia:8580/api/rest/process/skripsiService?nim_mahasiswa='. $mahasiswa->nim_mahasiswa)->json();
        
        $Dengan_Pujian = $client['prediction(predikat_IPK_Dengan_Pujian)'];
        $Sangat_Memuaskan = $client['prediction(predikat_IPK_Sangat_Memuaskan)'];
        $Memuaskan = $client['prediction(predikat_IPK_Memuaskan)'];

        if($Dengan_Pujian > $Sangat_Memuaskan && $Dengan_Pujian > $Memuaskan){
            $predikat_IPK = "Dengan Pujian";
        }
        elseif($Dengan_Pujian < $Sangat_Memuaskan && $Sangat_Memuaskan > $Memuaskan){
            $predikat_IPK = "Sangat Memuaskan";
        }elseif($Dengan_Pujian < $Memuaskan && $Sangat_Memuaskan < $Memuaskan){
            $predikat_IPK = "Memuaskan";
        }

        $mahasiswa->predikat_IPK = $predikat_IPK;
        $mahasiswa->predikat_IPK_Dengan_Pujian = $Dengan_Pujian;
        $mahasiswa->predikat_IPK_Sangat_Memuaskan = $Sangat_Memuaskan;
        $mahasiswa->predikat_IPK_Memuaskan = $Memuaskan;

        $mahasiswa->save();
        
		Session::flash('flash_message','Data Prediksi Berhasil Disimpan');
        //Mahasiswa::Create($request->all());

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
    public function edit($mahasiswa)
    {
        $halaman = 'prediksi'; 

        $mahasiswa = Mahasiswa::firstWhere('nim_mahasiswa',Auth::user()->nim);
        if($mahasiswa->Jenis_Kelamin == "LakiLaki"){
            $LakiLaki = 1;
            $Perempuan = 0;
        }else{
            $LakiLaki = 0;
            $Perempuan = 1;
        }
        return view('prediksi.edit', compact('mahasiswa','halaman','LakiLaki','Perempuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validator = Validator::make($request->all(),[
            'Pengetahuan_di_bidang_atau_disiplin_ilmu'    =>  'required',
            'Pengetahuan_di_luar_bidang_atau_disiplin_ilmu'   =>  'required',
            'Pengetahuan_umum'      =>  'required',
            'Berpikir_kritis'          =>  'required',
        ]);

        $data = Mahasiswa::firstWhere('nim_mahasiswa',Auth::user()->nim);
        if($validator->fails()){
            return redirect('prediksi/'.$data->nim.'/edit')
                ->withInput()
                ->withErrors($validator);
        }
        $data->update($request->all());

        $client = Http::withBasicAuth('admin','tioganteng')->get('http://Alodhia:8580/api/rest/process/skripsiService?nim_mahasiswa='. $data->nim_mahasiswa)->json();
        
        $Dengan_Pujian = $client['prediction(predikat_IPK_Dengan_Pujian)'];
        $Sangat_Memuaskan = $client['prediction(predikat_IPK_Sangat_Memuaskan)'];
        $Memuaskan = $client['prediction(predikat_IPK_Memuaskan)'];

        if($Dengan_Pujian > $Sangat_Memuaskan && $Dengan_Pujian > $Memuaskan){
            $predikat_IPK = "Dengan Pujian";
        }
        elseif($Dengan_Pujian < $Sangat_Memuaskan && $Sangat_Memuaskan > $Memuaskan){
            $predikat_IPK = "Sangat Memuaskan";
        }elseif($Dengan_Pujian < $Memuaskan && $Sangat_Memuaskan < $Memuaskan){
            $predikat_IPK = "Memuaskan";
        }

        $data->predikat_IPK = $predikat_IPK;
        $data->predikat_IPK_Dengan_Pujian = $Dengan_Pujian;
        $data->predikat_IPK_Sangat_Memuaskan = $Sangat_Memuaskan;
        $data->predikat_IPK_Memuaskan = $Memuaskan;

        $data->save();
		Session::flash('flash_message','Data Prediksi Berhasil Disimpan');
        return redirect('prediksi');
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
