<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $halaman = '/';
    return view('index', compact('halaman'));
});

Route::get('/about', function () {
    $halaman = 'about';
    return view('about', compact('halaman'));
});


Route::get('training/delete', 'TrainingController@delete');
Route::post('training/import_excel', 'TrainingController@import_excel');
Route::resource('training', 'TrainingController');

Route::resource('mahasiswa', 'MahasiswaController');