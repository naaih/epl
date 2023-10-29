<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('records',[StudentController::class,'showData']);