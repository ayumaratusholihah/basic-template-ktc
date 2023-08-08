<?php

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
    return view('welcome');
});
Route::get('/belajar', function() {
    echo 'Belajar Laravel. Tulisan ini ditampilkan dari routes';
    return view('belajar');
});
 ?><?php /**PATH C:\xampp\htdocs\10520067\resources\views/belajar.blade.php ENDPATH**/ ?>