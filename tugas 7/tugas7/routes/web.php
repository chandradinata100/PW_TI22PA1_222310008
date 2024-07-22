<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/',[MemberController::class, 'index']);
Route::post('/store', [MemberController::class, 'store']);

Route::get('/details/{member}', [MemberController::class, 'getDataByID']);

Route::get('/delete/{member}', [MemberController::class, 'destroy']);
Route::get('/update/{member}', [MemberController::class, 'edit']);
Route::post('/update/{member}/edit', [MemberController::class, 'update']);
