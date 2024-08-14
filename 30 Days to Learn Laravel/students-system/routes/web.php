<?php

use App\Models\student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/student/create', function (){
    return view('students.create');
});

Route::post('/students', [studentController::class, 'create']);
Route::get('/students', [studentController::class, 'index']);
Route::get('/student/{id}/edit', [studentController::class, 'edit']);
Route::get('/student/{id}', [studentController::class, 'show']);
Route::patch('/student/{id}', [studentController::class, 'update']);
Route::delete('/student/{id}', [studentController::class, 'destroy']);
