<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;
use App\Models\Statistic;
use Illuminate\Support\Facades\Auth;
use Hash;


class HomepageController extends Controller
{


    public function home()
    {   
        
        return view("home", ["data" => Statistic::all()[0]]);

    }

}
