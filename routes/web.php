<?php

use App\Http\Controllers\Backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\Frontend\BeritaController as FrontendBeritaController;
use App\Http\Controllers\Backend\PpdbController as BackendPpdbController;
use App\Http\Controllers\Frontend\PpdbController as FrontendPpdbController;
use App\Http\Controllers\Backend\CampaignController as BackendCampaignController;
use App\Http\Controllers\Frontend\CampaignController as FrontendCampaignController;
use App\Http\Controllers\Backend\DonationController as BackendDonationController;
use App\Http\Controllers\Frontend\DonationController as FrontendDonationController;
use App\Http\Controllers\Frontend\GalleryController as FrontendGalleryController;
use App\Http\Controllers\Backend\GalleryController as BackendGalleryController;
use App\Http\Controllers\Backend\DashboardController as BackendDashboardController;
use App\Http\Controllers\PaudController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

Route::get('/ponpes', function () {
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


Route::get('/ppdb/create', [FrontendPpdbController::class, 'create'])->name('ppdb.create');
Route::get('campaign/{campaign}/donation/create', [FrontendDonationController::class, 'create'])->name('donation.create');
route::get('/campaign/show', [FrontendCampaignController::class, 'show'])->name('campaign.show');
Route::get('/campaign/detail/{id}', [FrontendCampaignController::class, 'detail'])->name('campaign.detail');
Route::get('/berita/show', [FrontendBeritaController::class, 'show'])->name('berita.show');
Route::get('/gallery/show', [FrontendGalleryController::class, 'show'])->name('gallery.show');
Route::post('campaign/{campaign}/donation', [FrontendDonationController::class, 'store'])->name('donation.store');

Route::prefix('admin')->group(function () {
    Route::get('/ppdb/index', [BackendPpdbController::class, 'index'])->name('ppdb.index');
    Route::post('/ppdb/store', [BackendPpdbController::class, 'store'])->name('ppdb.store');
    Route::delete('/ppdb/{id}', [BackendPpdbController::class, 'destroy'])->name('ppdb.destroy');

    Route::get('/donation/index', [BackendDonationController::class, 'index'])->name('donation.index');
    Route::post('/donation/{donation}/accept', [BackendDonationController::class, 'accept'])->name('donation.accept');
    Route::post('/donation/{donation}/reject', [BackendDonationController::class, 'reject'])->name('donation.reject');
    Route::delete('/donation/{donation}', [BackendDonationController::class, 'destroy'])->name('donation.destroy');
    Route::post('/donation/{campaign}/store', [BackendDonationController::class, 'store'])->name('donation.adminstore');

    // Route::get('/donation/campaign/detail', [BackendDonationController::class, 'detailcampaign'])->name('donation.detail');
    // Route::get('/donation/campaign/{id}', [BackendDonationController::class, 'detaildonasi'])->name('donation.campaign');

    Route::get('/gallery/index', [BackendGalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [BackendGalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [BackendGalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/{gallery}', [BackendGalleryController::class, 'destroy'])->name('gallery.delete');

    Route::get('/berita/index', [BackendBeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BackendBeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita/store', [BackendBeritaController::class, 'store'])->name('berita.store');
    Route::delete('/berita/{berita}', [BackendBeritaController::class, 'destroy'])->name('berita.delete');

    route::get('/campaign/index', [BackendCampaignController::class, 'index'])->name('campaign.index');
    route::get('/campaign/create', [BackendCampaignController::class, 'create'])->name('campaign.create');
    route::post('/campaign/store', [BackendCampaignController::class, 'store'])->name('campaign.store');
    route::delete('/campaign/{id}/delete', [BackendCampaignController::class, 'destroy'])->name('campaign.delete');
    Route::get('/campaign/{id}/edit', [BackendCampaignController::class, 'edit'])->name('campaign.edit');
    Route::put('/campaign/{id}', [BackendCampaignController::class, 'update'])->name('campaign.update');
    Route::get('/campaign/{id}/view', [BackendCampaignController::class, 'detail'])->name('campaign.admindetail');

    Route::get('/dashboard', [BackendDashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/paud/show', [PaudController::class, 'show'])->name('paud.show');
    Route::post('/paud/store', [PaudController::class, 'store'])->name('paud.store');
    Route::delete('/paud/{id}', [PaudController::class, 'destroy'])->name('paud.destroy');
});




