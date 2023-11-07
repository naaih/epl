<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Bachelor;
use App\Models\Master;

class ModulesController extends Controller
{
     // function
    function showBachData() {
        $showBachData = Bachelor::all();

        return view('bachelor-records', compact('showBachData'));
    }

    function showMasterData() {
        $showMasterData = Master::all();

        return view('master-records', compact('showMasterData'));
    }
}
