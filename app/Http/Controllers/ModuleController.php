<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;

class ModuleController extends Controller
{
    function modulesData() {
        $moduleData = Module::all();

        return view('modules', compact('moduleData'));

    }
}