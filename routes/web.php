<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
// Route::get("student/show", [HomeController::class, 'show']);
// Route::get("student/add", [HomeController::class, 'add']);

// Route::prefix('student')->group(function (){
//     Route::get("show", [HomeController::class, 'show']);
//     Route::get("add", [HomeController::class, 'add']);
// });

Route::controller(StudentController::class)->group(function (){
    Route::get("student/show", 'show');
    Route::get("student/add", 'add');
    Route::get("student/delete", 'delete');
    ROute::get("about/{name}", 'about');
});