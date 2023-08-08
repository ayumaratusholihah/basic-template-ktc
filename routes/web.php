<?php

use App\Http\Controllers\ProdukController;

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
Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/produk/create', [ProdukController::class, 'create']);
Route::get('/produk/create', [ProdukController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function() {
    $data ['nama'] = "Tri Andini";
    $data ['jk'] = "Perempuan";
    return view('belajar', $data);
});

Route::get('/belajar', [ProdukController::class, 'index']);

Route::get('/produk/create', [ProdukController::class, 'create']);

Route::post('/produk/create', [ProdukController::class, 'store']);

Route::get('/nama', function() {
    echo 'Tri Andini';
});

Route::get('/kelas', function() {
    echo 'IS-2';
});

Route::get('/teman', function() {
    echo 'KIM TAEHYUNG';
});