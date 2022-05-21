<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Teacher\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\UserAdmin\UserAdminController;


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
    return view('welcome');
});
Route::get('/Langosta.school', function () {
    return view('welcome');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/','dashboard.user.login')->name('login');
        Route::view('/login','dashboard.user.login')->name('login');
        Route::post('/check',[UserController::class,'check'])->name('check');

    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::view('/','dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/','dashboard.admin.login')->name('login');
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[UserAdminController::class,'check'])->name('check');


    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){

        Route::view('/','dashboard.admin.home')->name('home');
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[UserAdminController::class,'logout'])->name('logout');

        //Teacher
        Route::view('/teacher/register', 'dashboard.teacher.register')->name('register');
        Route::post('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::post('/teacher/check', [TeacherController::class, 'check'])->name('teacher.check');

        //Student
        Route::view('/user/register','dashboard.user.register')->name('register');
        Route::post('/user/create',[UserController::class,'create'])->name('user.create');
        Route::post('/user/check',[UserController::class,'check'])->name('user.check');

        //Course
        Route::view('/course/register','course.create')->name('course.create');
        Route::view('/course/form','course.form')->name('course.form');
        Route::view('/course/edit','course.edit')->name('course.edit');
        Route::view('/course/show','course.show')->name('course.show');
        //Route::view('/course/index','course.index')->name('course.index');
        Route::post('/course/store',[CourseController::class,'store'])->name('courses.store');
        Route::post('/course/check',[CourseController::class,'check'])->name('courses.check');

    });

});

Route::prefix('teacher')->name('teacher.')->group(function() {

    Route::middleware(['guest:teacher', 'PreventBackHistory'])->group(function () {
        Route::view('/', 'dashboard.teacher.login')->name('login');
        Route::view('/login', 'dashboard.teacher.login')->name('login');
        Route::post('/check', [TeacherController::class, 'check'])->name('check');

    });

    Route::middleware(['auth:teacher', 'PreventBackHistory'])->group(function () {
        Route::view('/', 'dashboard.teacher.home')->name('home');
        Route::view('/home', 'dashboard.teacher.home')->name('home');
        Route::post('logout', [TeacherController::class, 'logout'])->name('logout');
    });
});
