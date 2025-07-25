<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SubjectController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('students', studentController::class);
Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);