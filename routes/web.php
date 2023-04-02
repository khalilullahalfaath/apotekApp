<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerObat;
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

/**
 * Kalau memanggil function untuk kebutuhan tanpa database maka gunakan get (biasanya saat menggunakan form). Untuk yang menggunakan database pake post
 */
Route::get('/view', [controllerObat::class, 'index'])->name('view'); 
Route::get('/create', [controllerObat::class, 'create'])->name('create');
Route::post('/store', [controllerObat::class, 'store'])->name('store');
Route::get('/edit/{id}', [controllerObat::class, 'edit'])->name('edit');
Route::post('/update/{id}', [controllerObat::class, 'update'])->name('update');
Route::get('/delete/{id}', [controllerObat::class, 'delete'])->name('delete');
