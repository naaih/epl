<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


class StudentController extends Controller
{
    // function
    function showData() {
        $showData = Student::all();

        return view('records', compact('showData'));

    }
}
