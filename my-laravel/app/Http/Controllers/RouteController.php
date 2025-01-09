<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function home()
    {
        return view('home');
    }
    function calculator()
    {
        return view('calculator');
    }
}
