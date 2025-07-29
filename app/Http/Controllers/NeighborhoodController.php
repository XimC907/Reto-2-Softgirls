<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NeighborhoodController extends Controller
{
    public function neighborhoods()
    {
        $neighborhoods = DB::table('neighborhood')->get();
        return view('Neighborhoods.registros', ['neighborhoods' => $neighborhoods]);
    }
}
