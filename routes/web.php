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
Route::get('admin/404', function () {
    return view('admin/404');
});
Route::get('admin/blank', function () {
    return view('admin/blank');
});
Route::get('admin/students', function () {
    return view('admin/students');
});
Route::get('admin/calendar', function () {
    return view('admin/calendar');
});
Route::get('admin/users', function () {
    return view('admin/users');
});
Route::get('admin/transcripts', function () {
    return view('admin/transcripts');
});
Route::get('admin/subjects', function () {
    return view('admin/subjects');
});
Route::get('admin/professors', function () {
    return view('admin/professors');
});
<<<<<<< HEAD
Route::get('admin/widget', function () {
    return view('admin/widget');
});
Route::get('admin/edit', function () {
    return view('admin/edit');
=======
Route::get('admin/schedule', function () {
    return view('admin/schedule');
>>>>>>> 8bbfb1b76811ac977cd1cacf98f378533a9f3656
});