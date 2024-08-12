<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'viewWelcome']);
Route::get('/add-student', [StudentController::class, 'viewAddStudent'])->name('regForm');
Route::post('/add-student',[StudentController::class, 'addStudent']);