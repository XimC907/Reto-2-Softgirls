<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function programs()
    {
        $programs = DB::table('program')->get();
        return view('Programs.registros', ['programs' => $programs]);
    }
}
