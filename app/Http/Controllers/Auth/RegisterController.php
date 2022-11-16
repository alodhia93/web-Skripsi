<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Storage;
use Illuminate\Support\Facades\File;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nim' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'jenisKelamin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'fakultas' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'foto'   => 'required|image|mimes:jpg,jpeg,png',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();

        //$data = $request->all();

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $fotoNama = date('YmdHis'). ".$ext";
                $path = 'fotoUpload';
                $request->file('foto')->move($path, $fotoNama);
                $data['foto'] = $fotoNama;
            }
        }
        $data['password'] = bcrypt($data['password']);
        return User::create([
            'nim' => $data['nim'],
            'nama' => $data['name'],
            'Jenis_Kelamin' => $data['jenisKelamin'],
            'email' => $data['email'],
            'prodi' => $data['prodi'],
            'fakultas' => $data['fakultas'],
            'foto' => $data['foto'],
            'level' => $data['level'],
            'password' => $data['password'],
        ]);
    }
}
