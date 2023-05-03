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


Route::get('student/courses', function () {
    return view('student/courses');
});
Route::get('student/1stYear', function () {
    return view('student/1stYear');
});
Route::get('student/calendar', function () {
    return view('student/calendar');
});
Route::get('student/exams', function () {
    return view('student/exams');
});
Route::get('student/transcripts', function () {
    return view('student/transcripts');
});
Route::get('student/subjects', function () {
    return view('student/subjects');
});
Route::get('student/2ndYear', function () {
    return view('student/2ndYear');
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
Route::get('student/messages', function () {
    return view('student/messages');
});



Route::get('professor/admin', function () {
    return view('professor/admin');
});
Route::get('professor/students', function () {
    return view('professor/students');
});
Route::get('professor/calendar', function () {
    return view('professor/calendar');
});
Route::get('professor/exams', function () {
    return view('professor/exams');
});
Route::get('professor/transcripts', function () {
    return view('professor/transcripts');
});
Route::get('professor/subjects', function () {
    return view('professor/subjects');
});
Route::get('professor/2ndYear', function () {
    return view('professor/2ndYear');
});
Route::get('professor/schedule', function () {
    return view('professor/schedule');
});
Route::get('professor/edit', function () {
    return view('professor/edit');
});
Route::get('professor/3rdYear', function () {
    return view('professor/3rdYear');
});
Route::get('professor/messages', function () {
    return view('professor/messages');
});