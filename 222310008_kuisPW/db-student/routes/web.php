<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class, 'index']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/details/{product}', [StudentController::class, 'getDataByID']);

Route::get('/delete/{product}', [StudentController::class, 'destroy']);
Route::get('/update/{product}', [StudentController::class, 'edit']);
Route::post('/update/{product}/edit', [StudentController::class, 'update']);
