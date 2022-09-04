<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahasiswa;
use Auth;
use Storage;
use Illuminate\Support\Facades\File;
use Validator;
use Session;
use App\Mail\VerifikasiEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AkunRequest;
use App\Http\Controllers\MahasiswaController;

class RegisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('regis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AkunRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('kpm')) {
            $kpm = $request->file('kpm');
            $ext = $kpm->getClientOriginalExtension();
            if ($request->file('kpm')->isValid()) {
                $kpmNama = date('YmdHis'). ".$ext";
                $path = 'kpmUpload';
                $request->file('kpm')->move($path, $kpmNama);
                $data['kpm'] = $kpmNama;
            }
        }
        $data['password'] = bcrypt($data['password']);
        User::Create($data);

        return redirect('/');
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
    public function destroy($id)
    {
        //
    }
}
