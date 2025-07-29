<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function departments()
    {
        $departments = DB::table('department')->get();
        return view('Departments.registros', ['departments' => $departments]);
    }
}
