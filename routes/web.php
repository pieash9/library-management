<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home')->middleware(AgeCheck::class, CountryCheck::class);
// ->middleware("check1");
// Route::get("student/show", [HomeController::class, 'show']);
// Route::get("student/add", [HomeController::class, 'add']);

// Route::prefix('student')->group(function (){
//     Route::get("show", [HomeController::class, 'show']);
//     Route::get("add", [HomeController::class, 'add']);
// });



Route::view('/about', 'about');

// Route::middleware('check1')->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get("student/show", 'show');
        Route::get("student/add", 'add');
        Route::get("student/delete", 'delete');
        Route::get("about/{name}", 'about');
    });
// });
