<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WineController;
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

//Homepage
Route::get('/', [HomeController::class,'index'])->name('home');

//Shopping cart
Route::get('/products', [ProductController::class,'index'])->name('products.index');

//Wine pages
Route::get('/wines/{wine:slug}', [WineController::class, 'show'])->name('wines.show');
Route::get('/wines/overview', [WineController::class, 'overview'])->name('wines.overview');

//Settings
Route::get('/settings/profile', [SettingsController::class, 'profile'])->middleware(['auth'])->name('settings.profile');
Route::get('/settings/password', [SettingsController::class, 'password'])->middleware(['auth'])->name('settings.password');
Route::get('/settings/wines', [SettingsController::class,'wines'])->middleware(['auth'])->name('settings.wines');
Route::get('/settings/orders', [SettingsController::class, 'orders'])->middleware(['auth'])->name('settings.orders');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';