<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommuneController extends Controller
{
    public function communes()
    {
        $communes = DB::table('commune')->get();
        return view('Communes.registros', ['communes' => $communes]);
    }
}
