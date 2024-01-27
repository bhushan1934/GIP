<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UC2Controller extends Controller
{
    public function index()
    {
        return view('medicine');
    }
}
