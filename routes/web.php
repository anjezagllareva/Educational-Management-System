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
Route::get('admin/schedule', function () {
    return view('admin/schedule');
});
Route::get('admin/edit', function () {
    return view('admin/edit');
});


Route::get('student/admin', function () {
    return view('student/admin');
});
Route::get('student/students', function () {
    return view('student/students');
});
Route::get('student/calendar', function () {
    return view('student/calendar');
});
Route::get('student/users', function () {
    return view('student/users');
});
Route::get('student/transcripts', function () {
    return view('student/transcripts');
});
Route::get('student/subjects', function () {
    return view('student/subjects');
});
Route::get('student/professors', function () {
    return view('student/professors');
});
Route::get('student/schedule', function () {
    return view('student/schedule');
});
Route::get('student/edit', function () {
    return view('student/edit');
});
Route::get('student/3rdYear', function () {
    return view('student/3rdYear');
});