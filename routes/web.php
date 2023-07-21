<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'is_admin'])->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\Admin\Dashboard::class, 'index']);

    Route::get('/booking', [App\Http\Controllers\Admin\Booking\IndexPage::class, 'index'])->name('booking');

    Route::get('/hotel', [App\Http\Controllers\Admin\Hotel\IndexPage::class, 'index'])->name('hotel');
    Route::get('/create-hotel', [App\Http\Controllers\Admin\Hotel\IndexPage::class, 'create'])->name('create.hotel');
    Route::post('/store-hotel', [App\Http\Controllers\Admin\Hotel\IndexPage::class, 'store'])->name('store.hotel');
    Route::get('/edit-hotel/{id}', [App\Http\Controllers\Admin\Hotel\IndexPage::class, 'edit'])->name('edit.hotel');
    Route::put('/update-hotel/{id}', [App\Http\Controllers\Admin\Hotel\IndexPage::class, 'update'])->name('update.hotel');

    Route::get('/room', [App\Http\Controllers\Admin\Room\IndexPage::class, 'index'])->name('room');
});

