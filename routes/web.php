<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\StudentController;


// Home
Route::get('/', function () {
    return view('welcome');
});

// Records
Route::get('records',[StudentController::class,'showData']);