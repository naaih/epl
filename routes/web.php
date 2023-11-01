<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('index');
});

Route::get('records',[StudentController::class,'showData']);