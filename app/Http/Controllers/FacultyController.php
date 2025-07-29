<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function faculties()
    {
        $faculties = DB::table('faculty')->get();
        return view('Faculties.registros', ['faculties' => $faculties]);
    }
}
