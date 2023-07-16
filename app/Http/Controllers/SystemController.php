<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;


class SystemController extends Controller
{


    public function system_logs()
    {   

        $model = new System;

        return view("system.logs", ["logs" => $model->get_system_logs()]);

    }

}
