<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\TagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('home');
}); 

Route::get('/package', function () {
    return view('components.packages');
}); 


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', [CourseController::class, 'index']); 

Route::get('/courses/create', [CourseController::class, 'create'])->middleware('auth'); 
Route::post('/courses', [CourseController::class, 'store'])->middleware('auth'); 

Route::get('/search', SearchController::class); 
Route::get('/tags/{tag:name}', TagController::class); 

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']); 
    Route::post('/register', [RegisteredUserController::class, 'store']); 

    Route::get('/login', [LoginController::class, 'create']); 
    Route::post('/login', [LoginController::class, 'store']); 
}); 

Route::delete('/logout', [LoginController::class, 'destroy']); 

Route::get('/enrollment', [EnrollmentController::class, 'index']); 
Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll'); 

