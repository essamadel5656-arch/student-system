<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);