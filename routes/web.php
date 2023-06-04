<?php
use App\Http\Controllers\Student\MessagesFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\testController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SubjectsController;

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

Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

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
// Route::get('login', function () {
//     return view('login');
// });
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
Route::get('admin/usersadd', function () {
    return view('admin/usersadd');
});
Route::get('admin/subjectsadd', function () {
    return view('admin/subjectsadd');
});
Route::get('admin/subjectsedit', function () {
    return view('admin/subjectsedit');
});

Route::get('add-user/', [UserController::class,'addUser']);
Route::post('save-user/', [UserController::class,'saveUser']);
Route::get('admin/usersedit/{id}', [UserController::class,'editUser']);
Route::post('update-user/', [UserController::class, 'updateUser']);



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

Route::get('professor/algo', function () {
    return view('professor/algo');
});

Route::get('professor/arkitektur', function () {
    return view('professor/arkitektur');
});

Route::get('professor/bti', function () {
    return view('professor/bti');
});

Route::get('professor/databaze', function () {
    return view('professor/databaze');
});

Route::get('professor/dizajn', function () {
    return view('professor/dizajn');
});

Route::get('professor/english', function () {
    return view('professor/english');
});

Route::get('professor/gaming', function () {
    return view('professor/gaming');
});

Route::get('professor/kripto', function () {
    return view('professor/kripto');
});

Route::get('professor/lab1', function () {
    return view('professor/lab1');
});

Route::get('professor/lab2', function () {
    return view('professor/lab2');
});

Route::get('professor/math', function () {
    return view('professor/math');
});

Route::get('professor/rrjeta', function () {
    return view('professor/rrjeta');
});

Route::get('professor/shk1', function () {
    return view('professor/shk1');
});

Route::get('professor/shk2', function () {
    return view('professor/shk2');
});

Route::get('professor/web', function () {
    return view('professor/web');
});
Route::get('professor/calendar', function () {
    return view('professor/calendar');
});
Route::get('professor/transcripts', function () {
    return view('professor/transcripts');
});
Route::get('professor/subjects', function () {
    return view('professor/subjects');
});
Route::get('professor/schedule', function () {
    return view('professor/schedule');
});
Route::get('professor/edit', function () {
    return view('professor/edit');
});
Route::get('professor/messages', function () {
    return view('professor/messages');
});
Route::get('professor/students', function () {
    return view('professor/students');
});
Route::get('/dbconn', function () {
    return view('dbconn');
});
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/test', [testController::class, 'createTestForm']);
Route::post('/test', [testController::class, 'TestForm'])->name('register.custom');
Route::get('/login', [CustomAuthController::class, 'createLoginForm']);
Route::post('admin/admin', [CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware('role');
Route::get('delete-user/{id}', [UserController::class,'deleteUser']);
Route::get('admin/admin', [UserController::class,'usersTable']);
 
Route::get('/student/messages', [MessagesFormController::class, 'createMessage']);
Route::post('/student/messages', [MessagesFormController::class, 'MessagesForm'])->name('messages.store');

Route::get('professor/messages', [MessagesFormController::class,'messagesTable']);

Route::get('admin/subjects', [SubjectsController::class,'subjectTable']);
Route::get('delete-subjects/{id}', [SubjectsController::class,'deleteSubjects']);
Route::post('save-subjects/', [SubjectsController::class,'saveSubjects']);
Route::get('add-subject/', [SubjectsController::class,'addSubject']);
Route::get('edit-subject/', [SubjectsController::class,'saveSubjects']);
Route::get('admin/subjectsedit/{id}', [SubjectsController::class,'editSubject']);
Route::post('update-subject/', [SubjectsController::class, 'updateSubject']);

Route::get('professor/subjects', [SubjectsController::class,'subjectProfessorTable']);
Route::get('student/subjects', [SubjectsController::class,'subjectStudentTable']);