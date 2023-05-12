<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenulisController;

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
    return view('penulis/beranda');
});

// Route::resource('penulis', PenulisController::class);


Route::get('/penulis/daftar', [PenulisController::class, 'index'])->name('penulis.index');
Route::get('penulis/create', [PenulisController::class, 'create'])->name('penulis.create');
Route::post('penulis/store', [PenulisController::class, 'store'])->name('penulis.store');
Route::get('/penulis', [PenulisController::class, 'show'])->name('penulis.show');
Route::get('penulis/{penulis}', [PenulisController::class, 'edit'])->name('penulis.edit');
Route::put('penulis/{penulis}/edit', [PenulisController::class, 'update'])->name('penulis.update');
Route::delete('penulis/{penulis}', [PenulisController::class, 'destroy'])->name('penulis.destroy');

