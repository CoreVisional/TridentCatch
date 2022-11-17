<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactUsFormController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/{product}', [ShopController::class, 'show'])->name('shop.show');


Route::get('/contact-us', [ContactUsFormController::class, 'createForm']);
Route::post('/contact-us', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


// Admininistrator route
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::middleware('auth')->group(function() {
    Route::get('/profile', 'UsersController@edit')->name('users.edit');
});

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
