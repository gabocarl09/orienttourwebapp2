<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecomendationController extends Controller
{
    public function recomendation()
    {
        return view('option.recomendation');
    }
}
