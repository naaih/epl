<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\StudentController;


// Home
Route::get('/', function () {
    return view('index');
});

// Records
Route::get('records',[StudentController::class,'showData']);