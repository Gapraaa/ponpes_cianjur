<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
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

Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/', function () {
    return view('ponpes.index');
})->name('ponpes');

Route::get('/smp', function () {
    return view('smp.index');
})->name('smp');

Route::get('/paud', function () {
    return view('paud.index');
})->name('paud');

Route::get('/gallery', function () {
    return view('gallery.index');
})->name('gallery');

Route::get('/mdta', function () {
    return view('mdta.index');
})->name('mdta');

// Route::get('/berita', function () {
//     return view('berita.index');
// })->name('berita');

Route::get('/ppdb/index', [PpdbController::class, 'index'])->name('ppdb.index');
Route::get('/ppdb/create', [PpdbController::class, 'create'])->name('ppdb.create');
Route::post('/ppdb/store', [PpdbController::class, 'store'])->name('ppdb.store');
Route::delete('/ppdb/{id}', [PpdbController::class, 'destroy'])->name('ppdb.destroy');

Route::get('campaign/{campaign}/donation/create', [DonationController::class, 'create'])->name('donation.create');
Route::post('campaign/{campaign}/donation', [DonationController::class, 'store'])->name('donation.store');
Route::get('/donation/index', [DonationController::class, 'index'])->name('donation.index');
Route::post('/donation/{donation}/accept', [DonationController::class, 'accept'])->name('donation.accept');
Route::post('/donation/{donation}/reject', [DonationController::class, 'reject'])->name('donation.reject');
Route::delete('/donations/{donation}', [DonationController::class, 'destroy'])->name('donation.destroy');

route::get('/campaign/index', [CampaignController::class, 'index'])->name('campaign.index');
route::get('/campaign/create',[CampaignController::class, 'create'])->name('campaign.create');
route::post('/campaign/store', [CampaignController::class, 'store'])->name('campaign.store');
route::delete('/campaign/{id}/delete', [CampaignController::class, 'destroy'])->name('campaign.delete');
route::get('/campaign/show', [CampaignController::class, 'show'])->name('campaign.show');
Route::get('/campaign/{id}', [CampaignController::class, 'detail'])->name('campaign.detail');

Route::get('/berita/show', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/index', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');
Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.delete');