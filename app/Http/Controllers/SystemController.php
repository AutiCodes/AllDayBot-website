<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website_activity_log;



class SystemController extends Controller
{



    public function system_logs()
    {   

        return view("system.logs", ["logs" => Website_activity_log::select("*")->orderByDesc("created_at")->get()]);

    }

}
