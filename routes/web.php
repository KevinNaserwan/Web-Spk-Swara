<?php

use App\Http\Controllers\CRUD;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Admin.Dashboard');
});

Route::get('/datakriteria', [CRUD::class, 'datakriteria']);

Route::get('/tambahdata', [CRUD::class, 'adddatakriteria']);

Route::get('/pembobotan', [CRUD::class, 'pembobotan']);
Route::get('/datasub', [CRUD::class, 'datasub']);
Route::get('/dataalternatif', [CRUD::class, 'dataalternatif']);
Route::get('/addalter', [CRUD::class, 'addalter']);
Route::get('/datapenilaian', [CRUD::class, 'datapenilaian']);
Route::get('/dataperhitungan', [CRUD::class, 'dataperhitungan']);
Route::get('/dataakhir', [CRUD::class, 'dataakhir']);


Route::post('/postdatakriteria', [CRUD::class, 'postdatakriteria']);
Route::post('/postsubkriteria', [CRUD::class, 'postdatasub']);
Route::post('/postdataalter', [CRUD::class, 'postdataalter']);
Route::post('/postdatapenilaian/{nama_alternatif}', [CRUD::class, 'postdatapenilaian']);
Route::get('/deletekriteria/{nama}', [CRUD::class, 'delete']);
Route::get('/deletesubkriteria/{nama}', [CRUD::class, 'subdelete']);
Route::get('/deletealter/{nama_alternatif}', [CRUD::class, 'alterdelete']);
