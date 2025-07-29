<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function scores()
    {
        $scores = DB::table('score')->get();
        return view('Scores.registros', ['scores' => $scores]);
    }
}
