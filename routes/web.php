<?php

use Illuminate\Support\Facades\Route;

// Student Controller
use App\Http\Controllers\StudentController;

// Module Controller
use App\Http\Controllers\ModuleController;



// Root page
Route::get('/', function () {
    return view('index');
});

// Home page
Route::get('index', function () {
    return view('index');
});

// Records Page
Route::get('records',[StudentController::class,'showData']);

Route::get('modules', function () {
    return view('modules');
});



// Route for table row 
// Route::get('/show/{id}', [StudentController::class, 'displayData'])->name('display');