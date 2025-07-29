<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function teachers()
    {
        $teachers = DB::table('teacher')->get();
        return view('Teachers.registros', ['teachers' => $teachers]);
    }
}
