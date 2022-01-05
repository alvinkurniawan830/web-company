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


Route::get('/', 'App\Http\Controllers\FrontendController@index');
Route::get('/', 'App\Http\Controllers\homeControllers@index');
Route::get('/galery', 'App\Http\Controllers\galleryControllers@index');