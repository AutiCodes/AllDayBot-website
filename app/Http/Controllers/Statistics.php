<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class Statistics extends Controller
{

    
    public function channels()
    {

        if (!Auth::check()) {
            return redirect("/login");
        } 
        
        return view("statistics.channels");

        

    }
}
