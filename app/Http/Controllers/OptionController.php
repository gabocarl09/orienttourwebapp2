<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function sold()
    {
        return view('option.sold');
    }
}
