<?php
use App\Http\Controllers\Student\MessagesFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\testController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ShkiController;
use App\Http\Controllers\WebController;

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
})->middleware('isLoggedIn');
Route::get('admin/students', function () {
    return view('admin/students');
})->middleware('isLoggedIn');
Route::get('admin/calendar', function () {
    return view('admin/calendar');
})->middleware('isLoggedIn');
Route::get('admin/users', function () {
    return view('admin/users');
})->middleware('isLoggedIn');
Route::get('admin/transcripts', function () {
    return view('admin/transcripts');
})->middleware('isLoggedIn');
Route::get('admin/subjects', function () {
    return view('admin/subjects');
})->middleware('isLoggedIn');
Route::get('admin/professors', function () {
    return view('admin/professors');
})->middleware('isLoggedIn');
Route::get('admin/schedule', function () {
    return view('admin/schedule');
})->middleware('isLoggedIn');
Route::get('admin/scheduleadd', function () {
    return view('admin/scheduleadd');
})->middleware('isLoggedIn');
Route::get('admin/scheduleedit', function () {
    return view('admin/scheduleedit');
})->middleware('isLoggedIn');
Route::get('admin/edit', function () {
    return view('admin/edit');
})->middleware('isLoggedIn');
Route::get('admin/usersadd', function () {
    return view('admin/usersadd');
})->middleware('isLoggedIn');
Route::get('admin/subjectsadd', function () {
    return view('admin/subjectsadd');
})->middleware('isLoggedIn');
Route::get('admin/subjectsedit', function () {
    return view('admin/subjectsedit');
})->middleware('isLoggedIn');
Route::get('admin/welcome', function () {
    return view('admin/welcome');
})->middleware('isLoggedIn');

Route::get('add-user/', [UserController::class,'addUser'])->middleware('isLoggedIn');
Route::post('save-user/', [UserController::class,'saveUser'])->middleware('isLoggedIn');
Route::get('admin/usersedit/{id}', [UserController::class,'editUser'])->middleware('isLoggedIn');
Route::post('update-user/', [UserController::class, 'updateUser'])->middleware('isLoggedIn');



Route::get('student/courses', function () {
    return view('student/courses');
})->middleware('isStudent');
Route::get('student/1stYear', function () {
    return view('student/1stYear');
})->middleware('isStudent');
Route::get('student/calendar', function () {
    return view('student/calendar');
})->middleware('isStudent');
Route::get('student/exams', function () {
    return view('student/exams');
})->middleware('isStudent');
Route::get('student/transcripts', function () {
    return view('student/transcripts');
})->middleware('isStudent');
Route::get('student/subjects', function () {
    return view('student/subjects');
})->middleware('isStudent');
Route::get('student/2ndYear', function () {
    return view('student/2ndYear');
})->middleware('isStudent');
Route::get('student/schedule', function () {
    return view('student/schedule');
})->middleware('isStudent');
Route::get('student/edit', function () {
    return view('student/edit');
})->middleware('isStudent');
Route::get('student/3rdYear', function () {
    return view('student/3rdYear');
})->middleware('isStudent');
Route::get('student/messages', function () {
    return view('student/messages');
})->middleware('isStudent');
Route::get('student/shk1', function () {
    return view('student/shk1');
})->middleware('isStudent');
Route::get('student/web', function () {
    return view('student/web');
})->middleware('isStudent');
Route::get('student/lab1', function () {
    return view('student/lab1');
})->middleware('isStudent');
Route::get('student/gaming', function () {
    return view('student/gaming');
})->middleware('isStudent');
Route::get('student/kriptografia', function () {
    return view('student/kriptografia');
})->middleware('isStudent');


Route::get('professor/admin', function () {
    return view('professor/admin');
})->middleware('isProfessor');

Route::get('professor/gaming', function () {
    return view('professor/gaming');
})->middleware('isProfessor');

Route::get('professor/kripto', function () {
    return view('professor/kripto');
})->middleware('isProfessor');

Route::get('professor/lab1', function () {
    return view('professor/lab1');
})->middleware('isProfessor');

Route::get('professor/shk1', function () {
    return view('professor/shk1');
})->middleware('isProfessor');

Route::get('professor/web', function () {
    return view('professor/web');
})->middleware('isProfessor');
Route::get('professor/calendar', function () {
    return view('professor/calendar');
})->middleware('isProfessor');
Route::get('professor/transcripts', function () {
    return view('professor/transcripts');
})->middleware('isProfessor');
Route::get('professor/subjects', function () {
    return view('professor/subjects');
})->middleware('isProfessor');
Route::get('professor/schedule', function () {
    return view('professor/schedule');
})->middleware('isProfessor');
Route::get('professor/edit', function () {
    return view('professor/edit');
})->middleware('isProfessor');
Route::get('professor/messages', function () {
    return view('professor/messages');
})->middleware('isProfessor');
Route::get('professor/students', function () {
    return view('professor/students');
})->middleware('isProfessor');

Route::get('professor/courses', function () {
    return view('professor/courses');
})->middleware('isProfessor');
Route::get('professor/shkenca1', function () {
    return view('professor/shkenca1');
})->middleware('isProfessor');
Route::get('professor/inxhinieri', function () {
    return view('professor/inxhinieri');
})->middleware('isProfessor');
Route::get('professor/laborator', function () {
    return view('professor/laborator');
})->middleware('isProfessor');
Route::get('professor/programim', function () {
    return view('professor/programim');
})->middleware('isProfessor');
Route::get('professor/kriptografia', function () {
    return view('professor/kriptografia');
})->middleware('isProfessor');
Route::get('/dbconn', function () {
    return view('dbconn');
});
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/test', [testController::class, 'createTestForm']);
Route::post('/test', [testController::class, 'TestForm'])->name('register.custom');
Route::get('/login', [CustomAuthController::class, 'createLoginForm']);
Route::post('admin/admin', [CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware('role','isLoggedIn');
Route::get('delete-user/{id}', [UserController::class,'deleteUser'])->middleware('isLoggedIn');
Route::get('admin/admin', [UserController::class,'usersTable'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);

Route::get('/student/messages', [MessagesFormController::class, 'createMessage'])->middleware('isStudent');
Route::post('/student/messages', [MessagesFormController::class, 'MessagesForm'])->name('messages.store')->middleware('isStudent');

Route::get('professor/messages', [MessagesFormController::class,'messagesTable'])->middleware('isProfessor');

Route::get('admin/subjects', [SubjectsController::class,'subjectTable'])->middleware('isLoggedIn');
Route::get('delete-subjects/{id}', [SubjectsController::class,'deleteSubjects'])->middleware('isLoggedIn');
Route::post('save-subjects/', [SubjectsController::class,'saveSubjects'])->middleware('isLoggedIn');
Route::get('add-subject/', [SubjectsController::class,'addSubject'])->middleware('isLoggedIn');
Route::get('edit-subject/', [SubjectsController::class,'saveSubjects'])->middleware('isLoggedIn');
Route::get('admin/subjectsedit/{id}', [SubjectsController::class,'editSubject'])->middleware('isLoggedIn');
Route::post('update-subject/', [SubjectsController::class, 'updateSubject'])->middleware('isLoggedIn');

Route::get('professor/subjects', [SubjectsController::class,'subjectProfessorTable'])->middleware('isProfessor');
Route::get('student/subjects', [SubjectsController::class,'subjectStudentTable'])->middleware('isStudent');


Route::get('admin/schedule', [ScheduleController::class,'scheduleTable'])->middleware('isLoggedIn');
Route::get('delete-schedule/{id}', [ScheduleController::class,'deleteSchedule'])->middleware('isLoggedIn');
Route::post('save-schedule/', [ScheduleController::class,'saveSchedule'])->middleware('isLoggedIn');
Route::get('add-schedule/', [ScheduleController::class,'addSchedule'])->middleware('isLoggedIn');
Route::get('edit-schedule/', [ScheduleController::class,'saveSchedule'])->middleware('isLoggedIn');
Route::get('admin/scheduleedit/{id}', [ScheduleController::class,'editSchedule'])->middleware('isLoggedIn');
Route::post('update-schedule/', [ScheduleController::class, 'updateSchedule'])->middleware('isLoggedIn');
Route::get('professor/schedule', [ScheduleController::class,'scheduleProfessorTable'])->middleware('isProfessor');
Route::get('student/schedule', [ScheduleController::class,'scheduleStudentTable'])->middleware('isStudent');

Route::get('professor/shkenca1add', function () {
    return view('professor/shkenca1add');
})->middleware('isProfessor');
Route::get('/upload-file', [ShkiController::class, 'createForm'])->middleware('isProfessor');
Route::post('/upload-file', [ShkiController::class, 'fileUpload'])->name('fileUpload')->middleware('isProfessor');
Route::get('professor/shkenca1', [ShkiController::class,'shkiTable'])->middleware('isProfessor');
Route::get('professor/shkenca1edit/{id}', [ShkiController::class,'editShki'])->middleware('isProfessor');
Route::post('update-shki/', [ShkiController::class, 'updateShki'])->middleware('isProfessor');
Route::get('delete-shki/{id}', [ShkiController::class,'deleteShki'])->middleware('isProfessor');
Route::get('student/shk1', [ShkiController::class,'ShkiStudentTable'])->middleware('isStudent');

Route::get('professor/inxhineriadd', function () {
    return view('professor/inxhinieriadd');
})->middleware('isProfessor');
Route::get('/upload-file', [WebController::class, 'createForm'])->middleware('isProfessor');
Route::post('/upload-file', [WebController::class, 'fileUpload'])->name('fileUpload')->middleware('isProfessor');
Route::get('professor/inxhinieri', [WebController::class,'webTable'])->middleware('isProfessor');
Route::get('professor/inxhinieriedit/{id}', [WebController::class,'editWeb'])->middleware('isProfessor');
Route::post('update-web/', [WebController::class, 'updateWeb'])->middleware('isProfessor');
Route::get('delete-web/{id}', [WebController::class,'deleteWeb'])->middleware('isProfessor');
Route::get('student/web', [WebController::class,'WebStudentTable'])->middleware('isStudent');