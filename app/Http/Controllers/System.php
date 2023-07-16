<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System_model as System_model;


class System extends Controller
{


    public function system_logs()
    {   

        $model = new System_model;

        return view("system.logs", ["logs" => $model->get_system_logs()]);

    }

}
