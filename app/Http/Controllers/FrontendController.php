<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        # code...
        $msh= "<h1>E-COMMERCE LARVAEL</h1>";
        return view('web.home');
    }
}
