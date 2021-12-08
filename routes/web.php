<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PropertyController;
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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
