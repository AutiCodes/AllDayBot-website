<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function home()
    {
        return view("home");
    }
}
