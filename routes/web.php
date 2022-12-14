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
    return view('pages.index');
})->name('home');
Route::get('annonce', function () {
    return view('pages.annonce');
})->name('annonce');
Route::get('annonceur', function () {
    return view('pages.annonceur');
})->name('annonceur');
Route::get('regisseur', function () {
    return view('pages.regisseur');
})->name('regisseur');
Route::get('logine', function () {
    return view('pages.login');
})->name('logine');
Route::get('inscription', function () {
    return view('pages.register');
})->name('inscription');
Route::get('pwdperdu', function () {
    return view('pages.pwdperdu');
})->name('pwdperdu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
