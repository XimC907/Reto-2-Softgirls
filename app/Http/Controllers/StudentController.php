<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function students()
    {
        $students = DB::table('student')->get();
        return view('Students.registros', ['students' => $students]);
    }
}
