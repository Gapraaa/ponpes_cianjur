<?php

use App\Http\Controllers\PpdbController;
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

Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/ppdb/index', [PpdbController::class, 'index'])->name('ppdb.index');
Route::get('/ppdb/create', [PpdbController::class, 'create'])->name('ppdb.create');
route::post('/ppdb/store', [PpdbController::class, 'store'])->name('ppdb.store');