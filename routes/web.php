<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('/about-us', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('welcome');
});
Route::get('/career', function () {
    return view('welcome');
});

Route::get('/shop-it', function () {
    return view('shop.s_home');
})->name('shop');


// Route::get('/send-quote-mail',[MailController::class,'sendQuoteMail']);
Route::post('/send-quote-mail',[MailController::class,'sendQuoteMail']);
Route::post('/send-contact-mail',[MailController::class,'sendContactMail'])->name('contactMail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
