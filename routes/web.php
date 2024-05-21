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

route::get('/donation/create', [DonationController::class, 'create'])->name('donation.create');
route::post('/donation/store', [DonationController::class, 'store'])->name('donation.store');

route::get('/campaign/index', [CampaignController::class, 'index'])->name('campaign.index');
route::get('/campaign/create',[CampaignController::class, 'create'])->name('campaign.create');
route::post('/campaign/store', [CampaignController::class, 'store'])->name('campaign.store');
