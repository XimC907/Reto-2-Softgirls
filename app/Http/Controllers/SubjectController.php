<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function subjects()
    {
        $subjects = DB::table('subject')->get();
        return view('Subjects.registros', ['subjects' => $subjects]);
    }
}
