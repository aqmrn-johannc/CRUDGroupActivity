<?php

use Illuminate\Support\Facades\Route;

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

Route::get('teachers', [App\Http\Controllers\TeacherController::class, 'index']);
Route::get('teachers/create', [App\Http\Controllers\TeacherController::class, 'create']);
Route::post('teachers/create', [App\Http\Controllers\TeacherController::class, 'store']);
Route::get('teachers/{id}/edit', [App\Http\Controllers\TeacherController::class, 'edit']);
Route::put('teachers/{id}/edit',[App\Http\Controllers\TeacherController::class, 'update']);
Route::get('teachers/{id}/delete',[App\Http\Controllers\TeacherController::class, 'destroy']);

Route::get('students/create2', [App\Http\Controllers\TeacherController::class, 'create2']);
Route::post('students/create2', [App\Http\Controllers\TeacherController::class, 'store2']);
Route::get('students/{id}/edit2', [App\Http\Controllers\TeacherController::class, 'edit2']);
Route::put('students/{id}/edit2',[App\Http\Controllers\TeacherController::class, 'update2']);
Route::get('students/{id}/delete2',[App\Http\Controllers\TeacherController::class, 'destroy2']);


Route::get('/', function () {
    return view('category.index');
});
