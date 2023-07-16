<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Statistic;



class StatisticsController extends Controller
{

    
    public function channels()
    {
        
        $model = new Statistic;

        return view("statistics.channels", ["channels" => $model->get_channel_statistics()]);

    }
    
}
