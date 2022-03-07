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

Route::get('/about', function () {
    echo "NIM: 2041720198<br>";
    echo "Nama: Raditya Catur Narendra<br>";
    echo "Kelas: TI 2B<br>";
});
