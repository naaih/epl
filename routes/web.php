<?php

use Illuminate\Support\Facades\Route;

// Student Controller
use App\Http\Controllers\StudentController;

// Module Controller
use App\Http\Controllers\ModulesController;



// Root page
Route::get('/', function () {
    return view('index');
});

// Home page
Route::get('index', function () {
    return view('index');
});

// Records Page
Route::get('records', [StudentController::class,'showData']);

// Modules page
Route::get('modules', function () {
    return view('modules');
});

Route::get('bachelor-records', [ModulesController::class, 'showBachData']);
Route::get('master-records', [ModulesController::class, 'showMasterData']);

// Route to get a single row of data from the database
Route::get('/show{id}', [StudentController::class, 'displayData'])->name('display');

// Route::get('search_data', [StudentController::class, 'searchData']);