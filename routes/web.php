<?php
use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\Form2Controller;
use App\Http\Controllers\Form3Controller;
use App\Http\Controllers\Form4Controller;
use App\Http\Controllers\Form5Controller;
use App\Http\Controllers\Form6Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);

Route::get('pannel/transport', function () {

    return view('pannel.transport');

});

//AUTH LOGIN ROUTE
Route::post('/', [AuthController::class, 'auth_login']);

Route::get('logout', [AuthController::class, 'logout']);

Route::middleware('admin')->prefix('pannel')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/role', [RoleController::class, 'list']);
    Route::get('/role/add', [RoleController::class, 'add']);
    Route::post('/role/add', [RoleController::class, 'insert']);
    Route::get('/role/edit/{id}', [RoleController::class, 'edit']);
    Route::post('/role/edit/{id}', [RoleController::class, 'update']);
    Route::get('/role/delete/{id}', [RoleController::class, 'delete']);

    Route::get('/user', [UserController::class, 'list']);
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user/add', [UserController::class, 'insert']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/edit/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);

});

//TEACHER ROUTES
Route::resource('teacher', TeacherController::class);
Route::get('/restore/{id}', [TeacherController::class, 'restore'])->name('teacher.restore');

//PDF GENERATOR
Route::get('pdf_generator', [TeacherController::class, 'pdf_generator_get']);



// FORM ONE ROUTES
Route::resource('form1', Form1Controller::class);

// FORM TWO ROUTES
Route::resource('form2', Form2Controller::class);

// FORM THREE ROUTES
Route::resource('form3', Form3Controller::class);

// FORM FOUR ROUTES
Route::resource('form4', Form4Controller::class);

// FORM FIVE ROUTES
Route::resource('form5', Form5Controller::class);

// FORM SIX ROUTES
Route::resource('form6', Form6Controller::class);


// Admin View Student Route
Route::get('admin/viewstudent', function () {
    return view('admin.viewstudent'); // Ensure this file exists at resources/views/admin/viewstudent.blade.php
});
