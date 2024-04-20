<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvController extends Controller
{
    public function cvpage()
    {
        return view('cv');
    }
}
