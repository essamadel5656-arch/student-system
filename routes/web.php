<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('students/create',function(){
    return view('students.create');
}
);
Route::get('students/index', [StudentController::class,'get_student']);
Route::post('students/store', [StudentController::class,'add_student']);
Route::get('students/{id}/edit',[StudentController::class,'edit_student']);
Route::put('students/{id}',[StudentController::class,'update_student']);
Route::delete('students/{id}',[StudentController::class,'destroy']);
