<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;


class Homepage extends Controller
{


    public function home()
    {   
        
        $Homemodel = new Home;

        return view("home", ["data" => $Homemodel->home_stats()]);

    }

}
