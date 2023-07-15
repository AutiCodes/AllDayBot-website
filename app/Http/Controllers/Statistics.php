<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Statistics_model;



class Statistics extends Controller
{

    
    public function channels()
    {
        
        $model = new Statistics_model;

        return view("statistics.channels", ["channels" => $model->get_channel_statistics()]);

    }
    
}
