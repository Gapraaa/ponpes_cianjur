<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/ponpes', function () {
    return view('ponpes.index');
});


Route::get('/ppdb/index', [PpdbController::class, 'index'])->name('ppdb.index');
Route::get('/ppdb/create', [PpdbController::class, 'create'])->name('ppdb.create');
Route::post('/ppdb/store', [PpdbController::class, 'store'])->name('ppdb.store');

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
// Route::get('/campaign/{campaign}/detail', [CampaignController::class, 'detail'])->name('campaign.detail');

Route::get('/campaign/detail', [CampaignController::class, 'detail'])->name('campaign.detail');