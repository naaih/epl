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

    function displayData(Request $request) {
        $showData = Student::find($request->id);
        return view('display', compact('showData'));
    }

    // function searchData(Request $request) {
    //     $data = $request -> Input('search');

    //     $showData = DB::table('students')->where('name', 'like', '%', $data, '%')->get();
    
    //     return view('records', compact('showData'));
    // }
}
