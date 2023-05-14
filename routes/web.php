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
    return redirect()->route('login');
});

Route::get('/contactUs', function () {
    return view('pages.contactUs');
});
Route::get('/aboutUs', function () {
    return view('pages.aboutUs');
});
Auth::routes();

Route::get('/dashboard/babyProducts', [App\Http\Controllers\HomeController::class, 'babyProducts'])->name('babyProducts');
Route::get('/dashboard/beverages', [App\Http\Controllers\HomeController::class, 'beveragesProducts'])->name('beveragesProducts');
Route::get('/dashboard/cloths', [App\Http\Controllers\HomeController::class, 'clothsProducts'])->name('clothsProducts');

Route::post('/delete-stock', [App\Http\Controllers\StockController::class, 'delete'])->name('deleteStock');
Route::post('/store-stock', [App\Http\Controllers\StockController::class, 'store'])->name('storeStock');


Route::namespace('Admin')->name('admin')->middleware('can:manage-users')->group(function(){
    Route::get('/test', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('test');
});
