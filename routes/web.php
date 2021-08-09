<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');
Route::get('/detail', 'App\Http\Controllers\DetailController@index')
    ->name('detail');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')
    ->name('checkout');
Route::get('/checkout/success', 'App\Http\Controllers\CheckoutController@success')
    ->name('checkout-success');

Route::prefix("admin")
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get("/", [DashboardController::class, 'index'])
            ->name("dashboard");

        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
    });
Auth::routes(['verify' => true]);