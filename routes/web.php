<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('index', function () {
    return view('index');
});


Route::get('about', function () {
    return view('about');
});
Route::get('about', function () {
    return view('about');
});
Route::get('app', function () {
    return view('app');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('courses', function () {
    return view('courses');
});
Route::get('index', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('admin/admin', function () {
    return view('admin/admin');
});