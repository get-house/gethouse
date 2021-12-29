<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::resource('/properties', PropertyController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    //named route to store media using media controller
    Route::post('/properties/media', [MediaController::class, 'store'])->name('media.store');

    //named route to destroy media using media controller
    Route::delete('/properties/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
});



require __DIR__ . '/auth.php';
