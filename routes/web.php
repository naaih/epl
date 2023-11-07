<?php

use Illuminate\Support\Facades\Route;

// Student Controller
use App\Http\Controllers\StudentController;

// Module Controller
use App\Http\Controllers\ModuleController;

// Home
Route::get('/', function () {
    return view('index');
});

// Records
Route::get('records',[StudentController::class,'showData']);

Route::get('modules', [ModuleController::class, 'modulesData']);