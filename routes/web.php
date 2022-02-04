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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/galery', function() {
    return view('frontend.galery');
});
Route::get('/portofolio', function() {
    return view('frontend.portofolio');
});
Route::get('/profil', function() {
    return view('frontend.profile');
});
Route::get('/blog', function() {
    return view('frontend.blog');
});
Route::get('/kontak', function() {
    return view('frontend.kontak');
});
Route::get('/content/{blog:id}', function() {
    return view('frontend.content');
});
Route::get('/vidio', function() {
    return view('frontend.vidio');
});




Route::get('/', 'App\Http\Controllers\FrontendController@index');
Route::get('/galery', 'App\Http\Controllers\galleryControllers@index');
Route::get('/profil', 'App\Http\Controllers\ProfileController@index');
Route::get('/portofolio', 'App\Http\Controllers\portofolioControllers@index');
Route::get('/blog', 'App\Http\Controllers\BlogController@index');
Route::get('/content/{blog:id}','App\Http\Controllers\BlogController@show');
Route::get('/vidio', 'App\Http\Controllers\VidioController@index');

Route::get('/mailform','App\Http\Controllers\SendMailController@loadForm')->name('mail.form');
Route::post('/mailsend','App\Http\Controllers\SendMailController@sendMail')->name('mail.send');